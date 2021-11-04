<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* MODELS */
use App\Models\Product;
use App\Models\Orders;
use App\Models\User;
use App\Models\Shipping;
use App\Models\LineItem;
use App\Models\Category;
use App\Models\Discount;

/* REDIRECT */
use Redirect;

/* OTHERS */
use BaconQrCode\Renderer\Path\Line;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        // $users = User::where('user_type','Buyer')->get();
        $users = User::all();
        $shippings = Shipping::all();
        return view('add-orders', [/* 'categories' => $categories, */
            'products' => $products, 'users' => $users, 'shippings' => $shippings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_id' => 'required',
            'seller_id' => 'required',
            'user_id' => 'required',
            'order_date' => 'required',
            'delivery_date' => 'required',
            'payment_status' => 'required',
        ]);
        $dis = Discount::where('discount_code', $request->discount_code)->first();
        if (!$dis) {
            // return Redirect::back()->withErrors(['msg' => "No such discount code found"]);
        }

        $products = Product::whereIn('id', $request->product_id)->get();

        $subsum = $products->sum('sale_price');
        $dis_amount = "";
        if ($dis) {
            if ($dis->discount_type == 'fixed') {
                $dis_amount = $dis->discount_amount;
            } else {
                $dis_amount =  ($subsum * $dis->discount_amount) / 100;
            }
        }
        $sum = $subsum - floatval($dis_amount);
        $sum = $sum < 0 ? 0 : $sum;

        $saveArray = ['subtotal' => $subsum, 'total' => $sum];
        $saveArray = array_merge($request->all(), $saveArray);
        unset($saveArray['product_id']);
        unset($saveArray['_token']);
        $o =  Orders::create($saveArray);
        foreach ($products as $p) {
            if (empty($p->sale_price)) {
                $p->sale_price = 0;
            }
            LineItem::create(['order_id' => $o->id, 'product_id' => $p->id, 'subtotal' => $p->sale_price, 'tax_rate' => 0, 'tax_amount' => 0, 'total' => $sum]);
        }
        if (!empty($request->swidth) || !empty($request->sheight) || !empty($request->sdepth) || !empty($request->sweight)) {
            $s = Shipping::create([
                'order_id' => $o->id,
                'width' => $request->swidth ?? 0,
                'height' => $request->sheight ?? 0,
                'depth' => $request->sdepth ?? 0,
                'weight' => $request->sweight ?? 0,
            ]);
        }
        return Redirect::to('orders')->with('success', 'Great! Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
        return view('orders', ['orders' => $orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($orderId)
    {
        $order = orders::where('id', $orderId)->first();
        // $pArr = json_decode($orders->product_id);
        // if(!is_array($pArr)){
        //     $pArr = [$pArr];
        // }
        $ol = LineItem::where('order_id', '=', $orderId)->get();
        $products = Product::all();
        $users = User::all();
        $pArr = [];
        foreach ($ol as $ols) {
            array_push($pArr, $ols->product_id);
        }
        $s = Shipping::where('order_id', $order->id)->first();
        if (!$s) {
            $s = new Shipping();
        }
        return view('edit-orders', ['orders' => $order,/*  'categories' => $categories, */ 'products' => $products, 's' => $s, 'users' => $users, 'ol' => $ol, 'pArr' => $pArr]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $order)
    {

        $request->validate([
            'product_id' => 'required',
            'seller_id' => 'required',
            'user_id' => 'required',
            'order_date' => 'required',
            'delivery_date' => 'required',
            'payment_status' => 'required',
        ]);
        $dis = Discount::where('discount_code', $request->discount_code)->first();
        $dis_amount = "";
        if (!$dis) {
            // return Redirect::back()->withErrors(['msg' => "No such discount code found"]);
        }
        $pArr = json_decode($request->pArr);
        $products = Product::whereIn('id', $request->product_id)->get();
        $subsum = $products->sum('sale_price');
        if ($dis) {
            if ($dis->discount_type == 'fixed') {
                $dis_amount = $dis->discount_amount;
            } else {
                $dis_amount =  ($subsum * $dis->discount_amount) / 100;
            }
        }
        $sum = $subsum - floatval($dis_amount);
        $sum = $sum < 0 ? 0 : $sum;

        $saveArray = ['subtotal' => $subsum, 'total' => $sum];
        $saveArray = array_merge($request->all(), $saveArray);
        unset($saveArray['product_id']);
        unset($saveArray['pArr']);
        unset($saveArray['_token']);
        $order->update($saveArray);
        /* Adding And Updating Line Order */
        foreach ($products as $p) {
            if (in_array($p->id, $pArr)) {
                $li = LineItem::where('product_id', $p->id)->get();
                $li = $li[0];
                if (empty($p->sale_price)) {
                    $p->sale_price = 0;
                }
                $li->subtotal = $p->sale_price;
                $li->total = $sum;
                $li->save();
                if (($key = array_search($p->id, $pArr)) !== false) {
                    unset($pArr[$key]);
                }
            } else {
                if (empty($p->sale_price)) {
                    $p->sale_price = 0;
                }
                LineItem::create(['order_id' => $order->id, 'product_id' => $p->id, 'subtotal' => $p->sale_price, 'tax_rate' => 0, 'tax_amount' => 0, 'total' => $sum]);
            }
        }
        /* Deleting Extra Line Order */
        foreach ($pArr as $a) {
            $li = LineItem::where('product_id', $a)->get();
            $li = $li[0];
            $li->delete();
        }
        /* SHIPPINGS */
        if (!empty($request->swidth) || !empty($request->sheight) || !empty($request->sdepth) || !empty($request->sweight)) {
            $s = Shipping::where('order_id', $order->id)->first();
            if (!$s) {
                Shipping::create([
                    'p_id' => $order->id ?? 0,
                    'width' => $request->swidth ?? 0,
                    'height' => $request->sheight ?? 0,
                    'depth' => $request->sdepth ?? 0,
                    'weight' => $request->sweight ?? 0,
                ]);
            } else {
                $s->width = $request->swidth ?? 0;
                $s->height = $request->sheight ?? 0;
                $s->weight = $request->sweight ?? 0;
                $s->depth = $request->sdepth ?? 0;
                $s->save();
            }
        }

        return Redirect::to('orders')->with('success', 'Great! order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $order)
    {
        //
        $lis = LineItem::where('order_id', $order->id)->get();
        foreach ($lis as $li) {
            $li->delete();
        }
        $shpngs = Shipping::where('order_id', $order->id)->get();
        foreach ($shpngs as $s) {
            $s->delete();
        }
        $order->delete();
        return Redirect::to('orders')->with('success', 'Great! order deleted successfully.');
    }
}
