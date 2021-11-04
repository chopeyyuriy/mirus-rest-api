<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'auction_id',
            'user_id',
            'users',
            'bid',
            'won',
            'bid_timestamp'
        ];

    public function user()
    {
        return $this->hasMany(\App\Models\User::class);
    }

    public function auction()
    {
        return $this->hasMany(\App\Models\Auction::class);
    }
}
