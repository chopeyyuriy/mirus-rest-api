<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = [
        'user_id',
        'product_id',
        'order_id',
        'rating'
    ];

    public static function addRating($request)
    {
        return Rating::where('user_id', $request->user_id)->where('product_id', $request->product_id)->exists();
    }
}
