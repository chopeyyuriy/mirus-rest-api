<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

/* MODELS */
use App\Models\Discount;

class DiscountList extends Component
{
    use WithPagination;


    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        
        $discounts = Discount::all();
        return view('livewire.discount-list',['discounts'=>$discounts]);
    }
}
