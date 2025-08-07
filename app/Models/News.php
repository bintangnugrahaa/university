<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'users_id',
        'slug',
    ];

    protected $casts = [
        'image' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
