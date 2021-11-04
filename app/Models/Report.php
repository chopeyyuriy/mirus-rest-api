<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'email',
        'message',
        'from_user',
        'to_user',
        'subject',
        'path',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function toUsers()
    {
        return $this->hasMany(User::class);
    }
}
