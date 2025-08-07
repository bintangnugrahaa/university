<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'nickname',
        'email',
        'phone_number',
        'admission_path',
        'image',
        'first_study_program',
        'second_study_program',
    ];

    protected $casts = [
        'image' => 'array',
    ];
}
