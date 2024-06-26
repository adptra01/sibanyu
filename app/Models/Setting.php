<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'logo',
        'icon',
        'contact',
        'whatsapp',
        'about',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'tiktok',
        'copyright',
        'advertisement',
        'mediaGuidelines',
    ];
}
