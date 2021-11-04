<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BidderController extends Controller
{
    public function getBiddersList(Request $request)
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

        $users_id = Bid::where('auction_id', $auctionId)->pluck('user_id');

        if ($users_id) {
            $bidder = User::whereIn('id', $users_id)->get();
        }

        return response()->json($bidder, 200);

    }

    public function getBidsHistory(Request $request)
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

        $bids = Bid::where('auction_id', $auctionId)->get();

        return response()->json($bids, 200);
    }

    public function addBid(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'auction_id' => ['required', 'numeric'],
            'bid' => ['required', 'regex:/^\d*(\.\d{1,2})?$/'],
            'bid_timestamp' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $bid = new Bid();
        $bid->auction_id = $request->auction_id;
        $bid->user_id = Auth::id();
        $bid->bid = $request->bid;
        $bid->bid_timestamp = $request->bid_timestamp;

        if ($bid->save()) {
            return response()->json(['bid_id' => $bid->id], 200);
        } else {
            return response()->json(['message' => 'Bid not saved'], 422);
        }
    }
}

