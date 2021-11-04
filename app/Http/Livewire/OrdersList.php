<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use App\Models\Orders;
use App\Models\Shipping;

class OrdersList extends Component
{
    use WithPagination;
    public $order_date;
    public $delivery_date;
    public $category;
    public $oid_productname;
    public $seller_name;
    public $buyer_name;
    public $status;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        // $users = User::where('user_type','Buyer')->get();
        $users = User::all();
        $shippings = Shipping::all();
        $orders = Orders::select('orders.*', 'b.first_name as buyer_name', 's.last_name as seller_name', 'orders.id as order_id')
            ->join('users as s', 's.id', '=', 'orders.user_id')
            ->join('users as b', 'b.id', '=', 'orders.seller_id')
            // ->join('line_items','line_items.order_id','=','orders.id')
            /* ->with(['user'=>function($q){
            $q->orWhere('users.id','orders.seller_id');
            dd($q->toSql());
        }]) */
            // ->join('products','products.id','=','orders.product_id')
            // $orders = Orders::select('')
            ->orderBy('orders.id', 'DESC')
            // ->with('user')
            ->when($this->oid_productname, function ($query) {
                return $query->where('orders.id', 'like', '%' . $this->oid_productname . '%');

                // return $query->where('products.title', 'like', '%' . $this->oid_productname . '%')
                //         ->orWhere('orders.id', $this->oid_productname);                
            })
            ->when($this->order_date, function ($query) {
                return $query->where('orders.order_date', $this->order_date);
            })
            ->when($this->delivery_date, function ($query) {
                return $query->where('orders.delivery_date', $this->delivery_date);
            })
            // ->when($this->category, function ($query) {
            //     return $query->where('categories.id' ,$this->category);
            // })
            ->when($this->seller_name, function ($query) {
                return $query->where('s.name', 'like', '%' . $this->seller_name . '%');
            })
            ->when($this->buyer_name, function ($query) {
                return $query->where('b.name', 'like', '%' . $this->buyer_name . '%');
            })
            ->when($this->status, function ($query) {
                return $query->where('orders.payment_status', $this->status);
            });
        $query = $orders->toSql();
        $orders = $orders->paginate(10);
        // dd($orders);
        return view('livewire.orders-list', ['orders' => $orders, 'categories' => $categories, /* 'query' => $query */]);
    }
}
