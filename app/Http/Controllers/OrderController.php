<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

use Auth;

class OrderController extends Controller
{
    public function createOrder(Request $request){

        //Address logic

        //$address = $request->shipping
        //$this->getTaxRate($address->zip_code); //To actually get the Tax Rate from shipping Address
        //


        $order = Order::create([
            'user_id' => Auth::user()->id,
            'subtotal' => $request->subtotal,
            'shipping_amount' => $request->shipping_amount,
            'tax_rate' => $this->getTaxRate(),
            'tax_amount' => ($request->subtotal+$request->shipping_amount) * $this->getTaxRate(),
            'total' => ($request->subtotal + $request->shipping_amount) * (1+$this->getTaxRate())
            ]);
        $this->getTaxRate($request->zip_code);
        foreach($request->products as $p){
            $product = Product::find($p->id);
            $this->createLineItem($order, $product);
        }
        
    }
    public function createLineItem($order, $product){
        $product = Product::create([
                        'order_id' => $order->id,
                        'product_id' => $product->id,
                        'item_status' => 'pending',
                        'subtotal' => $product->getPrice(),
                        'tax' => $order->tax_rate,
                        'tax_amount' => $product->getPrice() * $order->tax_rate,
                        'total' => $product->getPrice() + ($product->getPrice() * $order->tax_rate)
                    ]);
    }
    public function getTaxRate($zip){
        return .1;
    }
}
