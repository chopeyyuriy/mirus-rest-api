<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function getProductsList(Request $request)
    {
        $request->validate([
            'page' => ['required', 'numeric'],
            'limit' => ['required', 'numeric'],
        ]);

        $limit = $request->limit;

        $products = Product::leftJoin('users', 'products.user_id', 'users.id')
            ->select('products.*', 'users.user_products_status')
            ->with(['gallery' => function ($questions) {
                $questions->select('id', 'parent_id', 'path', 'created_at');
            }])
            ->whereNull('products.expiration_date')
            ->where('users.user_products_status', 1)
            ->paginate($limit);

        return response()->json(['products' => $products], 200);
    }

    public function getProductsListByUser(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'page' => ['required', 'numeric'],
            'limit' => ['required', 'numeric'],
        ]);

        $limit = $request->limit;
        $user_id = $request->user_id;

        $products = Product::leftJoin('users', 'products.user_id', 'users.id')
            ->select('products.*', 'users.user_products_status')
            ->with(['gallery' => function ($questions) {
                $questions->select('id', 'parent_id', 'path', 'created_at');
            }])
            ->where('products.user_id', $user_id)
            ->whereNull('products.expiration_date')
            ->where('users.user_products_status', 1)
            ->paginate($limit);

        return response()->json(['products' => $products], 200);
    }

    public function getProductDetails(Request $request)
    {
        $request->validate([
            'product_id' => 'required|numeric',
        ]);

        $product_id = $request->product_id;

        $productDetails = Product::with(['gallery' => function ($questions) {
            $questions->select('id', 'parent_id', 'path', 'created_at');
        }])->find($product_id);

        return response()->json(['product' => $productDetails ? $productDetails : []], 200);
    }

    public function getFilters(Request $request)
    {
        $categories['categories'] = Category::select('id', 'title', 'image')->get();

        foreach ($categories['categories'] as $item) {
            $item->image = $request->root() . '/images/' . $item->image;
        }

        $condition_type['condition_type'] = ['news', 'used'];
        $sale_type['sale_type'] = ['auction', 'fixed'];

        return response()->json([$categories, $condition_type, $sale_type], 200);
    }

    public function getProductFromFilters(Request $request)
    {
        $q = Product::query();

        $products = Product::scopeFilter($q);

        return response()->json($products, 200);
    }

    public function storeProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sku' => ['required', 'unique:products'],
            'title' => ['required'],
            'color' => ['required'],
            'weight' => ['numeric'],
            'short_desc' => ['required'],
            'features' => ['numeric'],
            'sale_price' => ['numeric'],
            'retail_price' => ['numeric'],
            'price' => ['numeric'],
            'discount' => ['numeric'],
            'discount_percent' => ['numeric'],
            'payload' => ['required'],
            'sale_type' => ['required', Rule::in(Product::$sale_type)],
            'status' => ['required', Rule::in(Product::$status)],
            'seller_name' => ['required'],

            'name' => ['string'],
            'buyout_price' => ['numeric'],
            'min_bid' => ['numeric'],
            'certification_id' => ['numeric'],
            'auction_status' => [Rule::in(Auction::$status)],

        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $product = new Product();
        $product->user_id = Auth::id();
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->sku = $request->sku;
        $product->title = $request->title;
        $product->color = $request->color;
        $product->weight = $request->weight;
        $product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
        $product->features = $request->features;
        $product->sale_price = $request->sale_price;
        $product->retail_price = $request->retail_price;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->discount_percent = $request->discount_percent;
        $product->payload = $request->payload;
        $product->gallery_id = mt_rand();
        $product->sale_type = $request->sale_type;
        $product->status = $request->status;
        $product->seller_name = $request->seller_name;
        $product->expiration_date = $request->expiration_date;

        if ($request->auction_id) {
            $product->auction_id = $request->auction_id;
        }

        if ($product->save()) {

            if ($request->sale_type == Product::AUCTION) {

                $auction = new Auction();
                $auction->user_id = Auth::id();
                $auction->name = $request->name;
                $auction->status = $request->auction_status;
                $auction->start_bid = $request->start_bid;
                $auction->buyout_price = $request->buyout_price;
                $auction->min_bid = $request->min_bid;
                $auction->basic_information = $request->basic_information;
                $auction->gallery_id = mt_rand();
                $auction->category_id = $request->category_id;
                $auction->subcategory_id = $request->subcategory_id;
                $auction->certification_id = $request->certification_id;
                $auction->start_time = $request->start_time;
                $auction->end_time = $request->end_time;
                $auction->save();
            }

            $product->savePicture($product->gallery_id, $request->picture);

            return response()->json(['product_id' => $product->id], 200);
        }

    }

    public function updateProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required'],
            'category_id' => ['required'],
            'subcategory_id' => ['required'],
            'title' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $productId = $request->get('product_id');

        $product = Product::find($productId);

        if ($product) {
            $product->user_id = Auth::id();
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->title = $request->title;
            $product->color = $request->color;
            $product->weight = $request->weight;
            $product->short_desc = $request->short_desc;
            $product->long_desc = $request->long_desc;
            $product->features = $request->features;
            $product->sale_price = $request->sale_price;
            $product->retail_price = $request->retail_price;
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->discount_percent = $request->discount_percent;
            $product->payload = $request->payload;
            $product->auction_id = $request->auction_id;
            $product->sale_type = $request->sale_type;
            $product->status = $request->status;
            $product->seller_name = $request->seller_name;

            if ($request->auction_id) {
                $product->auction_id = $request->auction_id;
            }

            $product->update();

            $product->savePicture($product->gallery_id, $request->picture);

            return response()->json(['message' => 'Successfully update Product!'], 200);
        } else {
            return response()->json(['message' => 'Product not found!'], 422);
        }

    }

    public function deleteProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $productId = $request->get('product_id');
        $product = Product::find($productId);
        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Successfully deleted Product!'], 200);
        } else {
            return response()->json(['message' => 'Product not found!'], 422);
        }

    }

}
