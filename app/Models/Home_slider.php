<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_slider extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'image',
        'order',
        'parent_slider',
        'status',
        'target_page'
    ];
    use HasFactory;
}
