<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;

    protected $table = 'chat_messages';

    protected $fillable = [
        'user_id',
        'chat_group_id',
        'message',
        'status'
    ];


}
