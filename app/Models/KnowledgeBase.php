<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeBase extends Model
{
    use HasFactory;

    protected $table = 'knowledge_bases';

    protected $fillable = [
        'author_id',
        'title',
        'description',
        'type',
        'image',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,  'author_id', 'id');
    }
}
