<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'instagram_link',
        'youtube_link',
        'linkedin_link',
        'facebook_link',
        'address',
        'email',
        'whatsapp_number',
        'google_maps_link',
    ];
}
