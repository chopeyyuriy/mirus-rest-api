<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'parent_id',
        'title',
        'image',
    ];

    public function products()
    {
      return $this->hasMany(Product::class);
    }

    public static function saveImage($image)
    {
        if ($image) {

            $imageName = time() . '_' . rand(1, 5000) . '.jpg';
            $save = Storage::disk('category')->putFileAs('/', $image, $imageName);

            if ($save) {
                return $imageName;
            }

        }

    }

    public function getImage()
    {
        if ($this->image) {
            return asset('/images/categories/' . $this->image);
        } else {
            return '/images/users/no_image.png';
        }
    }
}