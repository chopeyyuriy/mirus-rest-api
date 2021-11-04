<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'seller_id',
        'user_id',
        // 'category_id',
        'order_date',
        'delivery_date',
        'total',
        'subtotal',
        'long_desc',
        'shipping_id',
        'tax_id',
        'status',
        'payment_status',
        'order_notes',
        'user_id',
        'discount_code',
    ];   
    
    public function User(){
        return $this->belongsTo(User::class);
    }

            
}
