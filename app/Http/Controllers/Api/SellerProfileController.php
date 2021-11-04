<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Services\ValidateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SellerProfileController extends Controller
{
    public function workStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'seller_id' => ['required', 'numeric', 'exists:users,id'],
            'status' => ['required', 'numeric', 'boolean'],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $user = User::find($request->seller_id);
        $user->user_products_status = $request->status;

        if ($user->update()) {
            return response()->json(['message' => 'Successfully update seller products status'], 200);
        } else {
            return response()->json(['message' => 'Seller products status not changed'], 422);
        }
    }

    public function sellerDashboard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'seller_id' => ['required', 'numeric', 'exists:users,id'],
        ]);

        $seller_id = $request->seller_id;

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $soldItems = Product::where('user_id', $seller_id)
            ->where('status', 'sold')
            ->get();

        $data['store_start'] = [
            'sold_items' => count($soldItems),
            'your_revenue' => number_format($soldItems->sum('price'), 2, '.', ''),
            'seller_rate' => 5
        ];

        $data['your_sales'] = $soldItems;

        $data['recent_payouts'] = Order::where('seller_id', $seller_id)->get();

        return response()->json($data, 200);

    }

}
