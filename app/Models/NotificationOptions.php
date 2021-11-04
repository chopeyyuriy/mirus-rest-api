<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationOptions extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'recipents',
        'template',
        'status',
        'parent_name',
        'level',
    ];
}
