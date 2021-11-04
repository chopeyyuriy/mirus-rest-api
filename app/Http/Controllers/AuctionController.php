<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Auction;
use App\Models\Bid;

use Auth;

class AuctionController extends Controller
{

    public function getAuctionDetail(Request $request){
        $auction = Auction::with('bids')->find($request->auction_id);
        if($auction){
            return $api->makeResponse(json_encode($auction),'Auction Found'); 
        }
        else{
            return $api->makeResponse([],'Auction does not exist', 400); 
        }
    }

    public function getActiveAuctions(){
        $auctions = Auction::where([
                        ['status', 1], 
                        ['start_date', '>', now()], 
                        ['end_date','<', now()]
                    ])->get();

        return $api->makeResponse(json_encode($auctions),'Active Auctions Found'); 
    }
    /**
     * Create Auction
     */
    public function createAuction(Request $request){
        $api = new App\Services\ApiService;
        $auction = Auction::create([
                        'user_id' => Auth::user()->id,
                        'name' => $request->display_name,
                        'start_bid' => $request->start_bid,
                        'buyout_price' => $request->buyout_price,
                        'min_bid' => $request->min_bid, 
                        'start_time' => $request->start_time,
                        'end_time' => $request->end_time
                    ]);

        Product::whereIn('id', $request->product_ids)
                    ->where('user_id', Auth::user()->id)
                    ->update(['auction_id' => $auction->id]);
        
        return $api->makeResponse([],'Auction created successfully'); 
        
    }

    /**
     * Place Bid: Allow Current User to place a bid on an auction
     */

    public function placeBid(Request $request){
        $api = new App\Services\ApiService;
        $bid = Bid::create([
                    'auction_id' => $request->auction_id,
                    'user_id' => Auth::user()->id,
                    'bid' => $request->bid
                ]);
        return $api->makeResponse([],'Bid created successfully'); 
    }
}
