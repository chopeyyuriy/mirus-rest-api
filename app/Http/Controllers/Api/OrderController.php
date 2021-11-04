<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LineItem;
use App\Models\Order;
use App\Models\Shipment;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function getOrdersList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => ['required', 'numeric'],
            'limit' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $limit = $request->limit;

        if(count(Order::where('user_id', $request->user_id)->get())) {
            $orders = Order::paginate($limit);
            $message = $orders;
        } else {
            $message = ['message' => 'Orders not found!'];
        }

        return response()->json($message, 200);
    }

    public function getOrdersListByUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'page' => ['required', 'numeric'],
            'limit' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $limit = $request->limit;

        if(count(Order::where('user_id', $request->user_id)->get())) {
            $orders = Order::where('user_id', $request->user_id)->paginate($limit);

            $message = $orders;
         } else {
            $message = ['message' => 'Orders not found!'];
        }

        return response()->json($message, 200);
    }

    public function getOrderStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $order_id = $request->order_id;
        $order = Order::find($order_id);

        if ($order) {
            $status = ['status' => $order->status];
        } else {
            $status = ['status' => null];
        }

        return response()->json($status, 200);
    }

    public function getOrderDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $order_id = $request->order_id;
        $order = Order::find($order_id);

        if ($order) {
            return response()->json($order, 200);
        } else {
            return response()->json(['message' => 'Order not found!'], 422);
        }
    }

    public function getShippingInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $order_id = $request->order_id;
        $shipping = Shipping::where('order_id', $order_id)->first();

        if ($shipping) {
            return response()->json($shipping, 200);
        } else {
            return response()->json(['message' => 'Shipping not found!'], 422);
        }

    }

    public function getOrderPrice(Request $request)
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

        $orderPrice = Order::select(
            'id',
            'shipping_amount',
            'tax_rate',
            'tax_amount',
            'total'
        )->find($order_id);

        if ($orderPrice) {
            return response()->json($orderPrice, 200);
        } else {
            return response()->json(['message' => 'Order price not found!'], 422);
        }
    }

    public function storeOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'exists:products,id'],
            'shipping_id' => ['required', 'numeric', 'exists:shippings,id'],
            'seller_id' => ['required', 'numeric'],
            'order_date' => ['required'],
            'delivery_date' => ['required'],
            'order_notes' => ['required'],
            'long_desc' => ['required'],
            'payment_status' => ['required'],
            'payment_error_log' => ['required'],
            'subtotal' => ['required', 'numeric'],
            'shipping_amount' => ['required', 'numeric'],
            'tax_rate' => ['required', 'numeric'],
            'tax_amount' => ['required', 'numeric'],
            'total' => ['required', 'numeric'],
            'status' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $order = new Order();
        $order->user_id = Auth::id();
        $order->seller_id = $request->seller_id;
        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;
        $order->order_notes = $request->order_notes;
        $order->long_desc = $request->long_desc;
        $order->payment_status = $request->payment_status;
        $order->payment_error_log = $request->payment_error_log;
        $order->subtotal = $request->subtotal;
        $order->shipping_amount = $request->shipping_amount;
        $order->tax_rate = $request->tax_rate;
        $order->tax_amount = $request->tax_amount;
        $order->total = $request->total;
        $order->discount_code = $request->discount_code;
        $order->status = $request->status;

        if ($order->save()) {
            foreach ($request->product_id as $product_id) {
                $item = new LineItem();
                $item->order_id = $order->id;
                $item->product_id = $product_id;
                $item->shipping_id = $request->shipping_id;
                $item->user_id = Auth::id();
                $item->item_status = $request->item_status;
                $item->subtotal = $request->subtotal;
                $item->tax_rate = $request->tax_rate;
                $item->tax_amount = $request->tax_amount;
                $item->total = $request->tax_amount;
                $item->save();
            }


            return response()->json(['order_id' => $order->id], 200);
        } else {
            return response()->json(['message' => 'Order not store!'], 422);
        }

    }

    public function deleteOrder(Request $request)
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

        $orderId = $request->get('order_id');
        $order = Order::find($orderId);
        if ($order) {
            LineItem::where('order_id', $order->id)->delete();
            $order->delete();

            return response()->json(['message' => 'Successfully deleted Order!'], 200);
        } else {
            return response()->json(['message' => 'Order not found!'], 422);
        }

    }

    public function getShipmentsList()
    {
        $shipmentsList = Shipment::all();

        if ($shipmentsList) {
            return response()->json($shipmentsList, 200);
        } else {
            return response()->json(['message' => 'Shipments not found!'], 422);
        }

    }
}
