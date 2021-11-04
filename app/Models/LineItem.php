<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'shipping_id',
        'user_id',
        'item_status',
        'subtotal',
        'tax',
        'tax_rate',
        'tax_amount',
        'total'
    ];

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function shipping()
    {
        return $this->belongsTo('App\Models\Shipping');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Users');
    }

}
