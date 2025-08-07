<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nidn',
        'education',
        'position',
        'email',
        'topic',
        'image',
    ];

    protected $casts = [
        'image' => 'array',
    ];
}
