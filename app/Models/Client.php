<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'photo_1', // For the first uploaded photo
        'photo_2', // For the second uploaded photo
        'new_phone_1', // Assuming these are additional fields
        'new_phone_2', // Assuming these are additional fields
    ];
    
}
