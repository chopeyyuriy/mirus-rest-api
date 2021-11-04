<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Product;
use App\Models\Category;

/* REDIRECT */
use Redirect;

class DiscountController extends Controller
{
    //
    public $validationArray;
    public function __construct()
    {
        $this->validationArray = [
            'categories'=>'required',
            // 'product_ids' => 'required',
            'discount_amount' => 'required',
            'start_date' => 'required',
            'discount_code' => 'required',
            'end_date' => 'required',
            'active' => 'required',
            'discount_type' => 'required',
            // 'restriction'=>'required'
        ];
    }
    public function index()
    {
        return view('discount');
    }
    public function create()
    {
        $products = Product::all();
        return view('add-coupon',['products'=>$products,'dis'=> new Discount(),'cat'=>Category::all()]);        
    }
    public function store(Request $request)
    {
        $request->validate($this->validationArray);
        $products = json_encode($request->product_ids);
        $saveArray = ['products'=>$products];
        if(in_array('all',$request->categories)){
            $saveArray = ['categories'=>json_encode([0=>'all'])];
        }else{
            $saveArray = ['categories'=>json_encode($request->categories)];
        }
        $saveArray = array_merge($request->all(),$saveArray);
        unset($saveArray['product_ids']);
        unset($saveArray['_token']);
        
        $d =  Discount::create($saveArray);  
        // dd($d);      
        return Redirect::to(route('discountList'))->with('success','Great! Discount created successfully.');        
    }
    public function edit(Discount $discount)
    {
        $products = Product::all();
        return view('edit-coupon',['dis'=>$discount,'products'=>$products,'cat'=>Category::all()]);
    }
    public function update(Request $request,Discount $discount)
    {
        $request->validate($this->validationArray);

        $products = json_encode($request->product_ids);
        $saveArray = ['products'=>$products];
        if(in_array('all',$request->categories)){
            $saveArray = ['categories'=>json_encode([0=>'all'])];
        }else{
            $saveArray = ['categories'=>json_encode($request->categories)];
        }
        $saveArray = array_merge($request->all(),$saveArray);
        unset($saveArray['product_ids']);
        unset($saveArray['_token']);
        $discount->update($saveArray);        
        return Redirect::to(route('discountList'))->with('success','Great! Discount updated successfully.');        
    }
    public function delete( Discount $discount)
    {
        $discount->delete();
        return Redirect::to(route('discountList'))->with('success','Great! Discount Deleted successfully.');
    }

}
