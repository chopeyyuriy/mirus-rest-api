<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;



class ProductList extends Component
{
    use WithPagination;
    public $sale_type;
    public $category;
    public $title_sku;
    public $seller_name;
    public $status;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::all();
        $product = Product::orderBy('products.id', 'DESC')
            ->with('gallery')
            ->when($this->title_sku, function ($query) {
                return $query->where(function ($query) {
                    $query->where('title', 'like', '%' . $this->title_sku . '%')
                        ->orWhere('products.id', $this->title_sku);
                });
            })
            ->when($this->sale_type, function ($query) {
                return $query->where('sale_type', $this->sale_type);
            })
            ->when($this->category, function ($query) {
                return $query->join('categories','categories.id','=', 'products.category_id');
                // ->where('categories.name' ,'like', '%'.$this->category.'%');
            })
            ->when($this->seller_name, function ($query) {
                return $query->where('seller_name','like', '%'.$this->seller_name.'%');
            })
            ->when($this->status, function ($query) {
                return $query->where('status', $this->status);
            });
        $products = $product->paginate(10);
        return view('livewire.product-list', ['products' => $products,'categories'=>$categories]);
    }
}
