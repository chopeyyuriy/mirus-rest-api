<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'seller_id',
        'order_date',
        'delivery_date',
        'order_notes',
        'long_desc',
        'payment_status',
        'payment_error_log',
        'subtotal',
        'shipping_amount',
        'tax_rate',
        'tax_amount',
        'total',
        'discount_code'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function line_item()
    {
        return $this->hasMany(LineItem::class);
    }

}
