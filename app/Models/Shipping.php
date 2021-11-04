<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $table = 'shippings';

    protected $fillable = [
        'order_id',
        'shipment_status',
        'shipping_label',
        'height',
        'width',
        'depth',
        'weight',
        'zone',
        'price',
        'tax_amount'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
