<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    /**
     * @var string sale_type
     */
    const AUCTION = 'auction';
    const FIXED = 'fixed';

    /**
     * @var string status
     */
    const DRAFT = 'draft';
    const PUBLISHED = 'published';
    const SOLD = 'sold';
    const PAUSED = 'paused';
    const SUSPENDED = 'suspended';
    const ARCHIVED = 'archived';


    protected $table = 'products';
    protected $fillable = [
        'user_id',
        'category_id',
        'subcategory_id',
        'sku',
        'title',
        'color',
        'weight',
        'short_desc',
        'long_desc',
        'features',
        'sale_price',
        'retail_price',
        'price',
        'discount',
        'category_id',
        'discount_percent',
        'payload',
        'expiration_date',
        'seller_name',
        'sale_type',
        'status',
        'feature_item',
        'image',
        'images',
        'gallery_id',
        'condition'
    ];

    public static $sale_type = [self::AUCTION, self::FIXED];
    public static $status = [self::DRAFT, self::PUBLISHED, self::SOLD, self::PAUSED, self::SUSPENDED, self::ARCHIVED];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getPrice()
    {
        return $this->sale_price ? $this->sale_price : $this->price;
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'parent_id', 'gallery_id');
    }

    public static function scopeFilter($q)
    {
        if (request('category_id')) {
            $q->whereIn('category_id', request('category_id'));
        }
        if (request('subcategory_id')) {
            $q->whereIn('subcategory_id', request('subcategory_id'));
        }
        if (request('condition_type')) {
            $q->where('condition_type', request('condition_type'));
        }
        if (request('sale_type')) {
            $q->where('sale_type', request('sale_type'));
        }
        if (request('min_price')) {
            $q->where('price', '>=', request('min_price'));
        }
        if (request('max_price')) {
            $q->where('price', '<=', request('max_price'));
        }
        if (request('featured')) {
            $q->where('feature_item', request('featured'));
        }

        return $q->orderBy('id', 'asc')->get();
    }

    public function getPicture($picture)
    {
        if ($picture) {
            return asset('/images/pictures/' . $picture);
        } else {
            return '/images/users/no_image.png';
        }
    }

    public static function savePicture($id, $files)
    {
        if ($files) {

            foreach ($files as $file) {

                $imageName = time() . '_' . rand(1, 5000) . '.jpg';
                $save = Storage::disk('pictures')->putFileAs('/', $file, $imageName);

                if ($save) {
                    $gallery = new Gallery();
                    $gallery->parent_id = $id;
                    $gallery->image = $imageName;
                    $gallery->path = '/images/pictures/' . $imageName;
                    $gallery->save();

                }
            }

        }
        return true;
    }
}