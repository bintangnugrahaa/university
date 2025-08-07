<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rektor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'image',
    ];

    protected $casts = [
        'image' => 'array',
    ];
}
