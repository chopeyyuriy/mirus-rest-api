<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'active',
        'discount_code',
        'discount_amount',
        'discount_type',
        'products',
        'start_date',
        'end_date',
        'categories',
        'restriction',
        'min_purchase'
    ];
}
