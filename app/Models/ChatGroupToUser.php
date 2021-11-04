<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroupToUser extends Model
{
    use HasFactory;

    protected $table = 'chat_group_to_user';

    protected $fillable = [
        'chat_group_id',
        'user_id',
        'last_view_message_id',
    ];


}
