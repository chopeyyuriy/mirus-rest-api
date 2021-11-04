<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\Product;
use App\Services\ValidateService;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AuctionController extends Controller
{
    public function getAuctions(Request $request)
    {
        $request->validate([
            'page' => ['required', 'numeric'],
            'limit' => ['required', 'numeric'],
        ]);

        $limit = $request->limit;

        $auctions = Auction::leftJoin('users', 'auctions.user_id', 'users.id')
            ->select('auctions.*', 'users.user_products_status')
            ->where('users.user_products_status', 1)
            ->with(['gallery' => function ($questions) {
                $questions->select('id', 'parent_id', 'image', 'created_at');
            }])->paginate($limit);

        return response()->json(['auctions' => $auctions], 200);
    }

    public function getAuctionInfo(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'auction_id' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $auctionId = $request->get('auction_id');

        $auction = Auction::with(['gallery' => function ($questions) {
            $questions->select('id', 'parent_id', 'path', 'created_at');
        }])->find($auctionId);

        return response()->json($auction, 200);
    }

    public function storeAuction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'start_bid' => ['required'],
            'buyout_price' => ['numeric'],
            'min_bid' => ['numeric'],
            'basic_information' => ['required'],
            'category_id' => ['required', 'numeric'],
            'subcategory_id' => ['required'],
            'certification_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],

            'sku' => ['required', 'unique:products'],
            'title' => ['required'],
            'color' => ['required'],
            'weight' => ['numeric'],
            'short_disc' => ['required'],
            'features' => ['numeric'],
            'sale_price' => ['numeric'],
            'retail_price' => ['numeric'],
            'price' => ['numeric'],
            'discount' => ['numeric'],
            'discount_percent' => ['numeric'],
            'payload' => ['required'],
            'sale_type' => ['required', Rule::in(Product::$sale_type)],
            'product_status' =>  ['required', Rule::in(Product::$status)],
            'seller_name' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $auction = new Auction();
        $auction->user_id = Auth::id();
        $auction->name = $request->name;
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

        if ($auction->save()) {
            $auction->savePicture($auction->gallery_id, $request->picture);

            $product = new Product();
            $product->user_id = Auth::id();
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->auction_id = $auction->auction_id;
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
            $product->status = $request->product_status;
            $product->seller_name = $request->seller_name;
            $product->expiration_date = $request->expiration_date;
            $product->save();

            $product->savePicture($product->gallery_id, $request->product_image);

            return response()->json(['auction_id' => $auction->id, 'product_id' => $product->id], 200);
        }

    }

    public function updateAuction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'auction_id' => ['required'],
            'name' => ['required'],
            'start_bid' => ['required'],
            'buyout_price' => ['numeric'],
            'min_bid' => ['numeric'],
            'basic_information' => ['required'],
            'category_id' => ['required', 'numeric'],
            'subcategory_id' => ['required'],
            'certification_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $auctionId = $request->get('auction_id');

        $auction = Auction::find($auctionId);

        if ($auction) {

            $auction->user_id = Auth::id();
            $auction->name = $request->name;
            $auction->start_bid = $request->start_bid;
            $auction->buyout_price = $request->buyout_price;
            $auction->min_bid = $request->min_bid;
            $auction->basic_information = $request->basic_information;
            $auction->category_id = $request->category_id;
            $auction->subcategory_id = $request->subcategory_id;
            $auction->certification_id = $request->certification_id;
            $auction->start_time = $request->start_time;
            $auction->end_time = $request->end_time;
            $auction->update();

            return response()->json(['message' => 'Successfully updated Auction!'], 200);
        } else {
            return response()->json(['message' => 'Auction not found!'], 422);
        }
    }

    public function deleteAuction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'auction_id' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $auctionId = $request->get('auction_id');
        $auction = Auction::find($auctionId);
        if ($auction) {
            $auction->delete();
            return response()->json(['message' => 'Successfully deleted Auction!'], 200);
        } else {
            return response()->json(['message' => 'Auction not found!'], 422);
        }

    }

    public function getAuctionProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'auction_id' => ['required', 'numeric'],
            'product_id' => ['required', 'numeric']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $productId = $request->get('product_id');
        $auctionId = $request->get('auction_id');

        $product = Product::where('id', $productId)->where('auction_id', $auctionId)->first();

        return response()->json($product, 200);
    }

    public function getAuctionStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'auction_id' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $auctionId = $request->get('auction_id');
        $auctionStatus = Auction::find($auctionId);
        if ($auctionStatus) {
            $status = ['status' => $auctionStatus->status];
        } else {
            $status = ['message' => 'Auction not found!'];
        }

        return response()->json($status, 200);
    }

    public function myAuctions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $auctions = Auction::myAuctions($request->user_id);

        if ($auctions) {
            return response()->json($auctions, 200);
        } else {
            return response()->json(['message' => 'Auctions users not found!'], 422);
        }

    }


}
