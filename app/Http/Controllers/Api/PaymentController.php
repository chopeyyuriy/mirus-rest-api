<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function getPaymentInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $order_id = $request->order_id;

        $payment = Payment::where('order_id', $order_id)->first();

        if ($payment) {
            return response()->json($payment, 200);
        } else {
            return response()->json(['message' => 'Payment info not found!'], 422);
        }
    }

    public function updatePaymentInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_id' => ['required', 'numeric'],
            'card_number' => ['required', 'numeric', 'digits:16'],
            'month' => ['required', 'numeric', 'between:1,12'],
            'year' => ['required', 'numeric', 'between:20,99'],
            'cvc' => ['required', 'numeric', 'digits:3'],
            'owner_name' => ['required'],
            'country' => ['required'],
            'phone_number' => ['required', 'numeric', 'digits:11'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $payment_id = $request->payment_id;
        $payment = Payment::find($payment_id);

        if ($payment) {
            $payment->card_number = $request->card_number;
            $payment->month = $request->month;
            $payment->year = $request->year;
            $payment->cvc = $request->cvc;
            $payment->owner_name = $request->owner_name;
            $payment->country = $request->country;
            $payment->phone_number = $request->phone_number;
            $payment->update();

            return response()->json(['message' => 'Successfully update Payment!'], 200);
        } else {
            return response()->json(['message' => 'Payment info not found!'], 422);
        }

    }

    public function getPayouts(Request $request)
    {
        $user = auth()->user();
        $orders = Order::where('user_id', $user->id)->get()->toArray();
        $payments = DB::Table('payments')->whereIn('order_id', $orders)->get();
        return response()->json($payments, 200);
    }

    public function filterPayout(Request $request)
    {

        $query = New Payment();
        if ($request->order_id) {
            $query = $query->where('order_id', $request->order_id);
        }
        if ($request->date) {
            $query = $query->where('payment_date', $request->date);
        }
        if ($request->date) {
            $query = $query->where('payment_date', $request->date);
        }
        if ($request->buyer_name) {
            $query = $query->where('owner_name', $request->buyer_name);
        }

        $result = $query->get();

        if ($result) {
            return response()->json($result, 200);
        } else {
            return response()->json('No Result', 422);
        }
    }
}
