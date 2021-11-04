<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Auction extends Model
{
    use HasFactory;

    /**
     * @var string status
     */
    const CURRENT = 'current';
    const WON = 'won';
    const LOST = 'lost';

    protected $fillable = [
        'user_id',
        'status',
        'name',
        'start_bid',
        'buyout_price',
        'min_bid', //minimum for each bid
        'start_time',
        'end_time',
        'gallery_id'
    ];

    public static $status = [self::CURRENT, self::WON, self::LOST];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'parent_id', 'gallery_id');
    }

    public static function savePicture($auctionId, $files)
    {
        if ($files) {

            foreach ($files as $file) {

                $imageName = time() . '_' . rand(1, 5000) . '.jpg';
                $save = Storage::disk('pictures')->putFileAs('/', $file, $imageName);

                if ($save) {
                    $gallery = new Gallery();
                    $gallery->parent_id = $auctionId;
                    $gallery->image = $imageName;
                    $gallery->path = '/images/pictures/' . $imageName;
                    $gallery->save();

                }
            }

        }
        return true;
    }

    public static function myAuctions($user_id)
    {
        $auctions = self::where('user_id', $user_id)->get();

        $data = [];
        foreach ($auctions as $auction){
            switch ($auction->status) {
                case 'current':
                    $data['current'] = $auction;
                    break;
                case 'won':
                    $data['won'] = $auction;
                    break;
                case 'lost':
                    $data['lost'] = $auction;
                    break;
            }
        }

        return $data;


    }
}
