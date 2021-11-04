<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FavoriteProducts;
use App\Services\ValidateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaveItemsController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'product_id' => ['required', 'numeric', 'exists:products,id']
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $user_id = $request->user_id;
        $product_id = $request->product_id;

        if (FavoriteProducts::issetFavoriteProducts($user_id, $product_id)) {
            return response()->json(['message' => 'This product has already been added to your favorites!'], 422);
        } else {
            $favorite = new FavoriteProducts();
            $favorite->user_id = $user_id;
            $favorite->product_id = $product_id;
            $favorite->save();
            return response()->json(['message' => 'Product successfully added to my saved items'], 200);
        }

    }

    public function receive(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }
        $products = FavoriteProducts::with(['product' => function ($questions) {
            $questions->select(
                "id",
                "user_id",
                "category_id",
                "auction_id",
                "sku",
                "title",
                "short_desc",
                'status',
                'gallery_id',
                'feature_item'
            )->with(['gallery' => function ($questions) {
                $questions->select('id', 'parent_id', 'path', 'created_at');
            }]);
        }])->where('user_id', $request->user_id)->get();


        return response()->json($products, 200);
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:favorite_products,user_id'],
            'product_id' => ['required', 'numeric', 'exists:favorite_products,product_id']
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $favoriteProduct = FavoriteProducts::where('user_id', $request->user_id)
            ->where('product_id', $request->product_id);

        if ($favoriteProduct) {
            $favoriteProduct->delete();
            return response()->json(['message' => 'Successfully removed a product from my saved!'], 200);
        } else {
            return response()->json(['message' => 'Product not found!'], 422);
        }
    }

}
