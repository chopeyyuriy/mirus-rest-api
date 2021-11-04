<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Shipping;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ecommerce-products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('ecommerce-add-product', ['categories' => $categories]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->user_id = Auth::id();
        $product->sku = rand();
        $product->title = $request->title;
        $product->sale_type = $request->sale_type;
        $product->sale_price = $request->sale_price;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->seller_name = $request->seller_name;
        $product->long_desc = $request->long_desc;
        $product->expiration_date = date('Y-m-d');
        $product->feature_item = $request->feature_item;
        $product->gallery_id = mt_rand();

        if($product->save()){
            $product->savePicture($product->gallery_id, $request->picture);

            return Redirect::to('products')->with('success', 'Great! product created successfully.');
        } else {
            return Redirect::to('products')->with('success', 'Products not save.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('ecommerce-product-detail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('gallery')->find($id);

        $categories = Category::all();
        return view('ecommerce-update-product', ['p' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->user_id = Auth::id();
        $product->sku = rand();
        $product->title = $request->title;
        $product->sale_type = $request->sale_type;
        $product->sale_price = $request->sale_price;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->seller_name = $request->seller_name;
        $product->long_desc = $request->long_desc;
        $product->feature_item = $request->feature_item;

        if($product->update()){
            $product->savePicture($product->gallery_id, $request->picture);

            return Redirect::to('products')->with('success', 'Great! product updated successfully.');
        } else {
            return Redirect::to('products')->with('success', 'Products not updated.');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        try {
            $product->delete();
        } catch (Exception $e) {
            if($e->errorInfo[0] == "23000"){
                return Redirect::back()->withErrors(['msg' => "First Delete corresponding Order"]);
            }
        }
        return Redirect::to('products')->with('success', 'Great! product deleted successfully.');
    }
    /**
     * add Product From API
     */
    public function addFromAPI(Request $request)
    {
        $api = new App\Services\ApiService;
        if (Auth::user()) {
            $images = $this->uploadImages($request->file('files'));
            $product = Product::create([
                'user_id' => Auth::user()->id,
                'category_id' => $request->category_id,
                'sku' => $request->sku,
                'title' => $request->title,
                'color' => $request->color,
                'weight' => $request->weight,
                'short_desc' => $request->short_desc,
                'long_desc' => $request->long_desc,
                'features' => $request->features,
                'sale_price'  => $request->sale_price,
                'retail_price' => $request->retail_price,
                'price' => $request->price,
                'images' => json_encode($images),
                'payload' => $request->payload,
                'expiration_date' => $request->expiration_date,
                'seller_name' => Auth::user()->name,
                'sale_type' => $request->sale_type,
                'status'  => $request->status
            ]);
            return $api->makeResponse('Product Added Successfully');
        } else {
            return $api->makeResponse('API Auth Needed: Please log in.', 'failed', 401);
        }
    }
    /**
     * Update Product From API
     */
    public function updateFromAPI(Request $request)
    {
        $api = new App\Services\ApiService;
        if (Auth::user()) {
            $product = Product::find($request->product_id);
            if ($product->user_id === Auth::user()->id) {
                $images = json_decode($product->images);
                foreach ($this->uploadImages($request->file('files')) as $img) {
                    array_push($images, $img);
                }
                $product = Product::update([
                    'user_id' => Auth::user()->id,
                    'category_id' => $request->category_id,
                    'sku' => $request->sku,
                    'title' => $request->title,
                    'color' => $request->color,
                    'weight' => $request->weight,
                    'short_desc' => $request->short_desc,
                    'long_desc' => $request->long_desc,
                    'features' => $request->features,
                    'sale_price'  => $request->sale_price,
                    'retail_price' => $request->retail_price,
                    'price' => $request->price,
                    'images' => json_encode($images),
                    'payload' => $request->payload,
                    'expiration_date' => $request->expiration_date,
                    'seller_name' => Auth::user()->name,
                    'sale_type' => $request->sale_type,
                    'status'  => $request->status
                ]);
            }
        } else {
            return $api->makeResponse('API Auth Needed: Please log in.', 'failed', 401);
        }
    }
    public function uploadImages($files)
    {
        $images = array();
        foreach ($files as $rf) {
            $temp = ['docType' => $request->docType, 'docType_id' => $request->docType_id];
            $tempName = env('APP_URL') . '/images/products/' . strtotime(now()) . "_" . $rf->getClientOriginalName();
            $rf->move(public_path() . '/images/products/', strtotime(now()) . "_" . $rf->getClientOriginalName());
            $temp['url'] = $tempName;
            array_push($images, $temp);
        }

        return $images;
    }
}
