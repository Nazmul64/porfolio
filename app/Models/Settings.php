<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'description',
        'address',
        'gmail',
        'phone',
        'facebook',
        'youtube',
        'whatsapp',
        'instragram',
        'linkdine',
        'photo',
        'icon',
        'icon_new_photo',
        'new_photo',
    ];
}
