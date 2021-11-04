<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteProducts extends Model
{
    use HasFactory;

    protected $table = 'favorite_products';

    protected $fillable = [
        'user_id',
        'product_id'
    ];

    public $timestamps = false;

    public function product()
    {
        return $this->hasMany(Product::class,  'id', 'product_id');
    }

    public static function issetFavoriteProducts($user_id, $product_id)
    {
        return self::where('user_id', $user_id)->where('product_id', $product_id)->exists();
    }
}
