<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone_number extends Model
{
    use HasFactory;

    /**
     * $phone_type
     */
    const HOME = 'home';
    const WORK = 'work';

    protected $fillable = [
        'number',
        'type',
    ];

    public static $phone_type = [self::HOME, self::WORK];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
