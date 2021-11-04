<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroups extends Model
{
    use HasFactory;

    protected $table = 'chat_groups';

    protected $fillable = [
        'name',
        'user_from_id',
        'user_to_id',
    ];

    public function user_from()
    {
        return $this->hasOne(User::class,  'id', 'user_from_id');
    }

    public function user_to()
    {
        return $this->hasOne(User::class,  'id', 'user_to_id');
    }

}
