<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Omsblog extends Model
{
    protected $fillable=[
        'title',
        'description',
        'is_by_admin',
        'details_title',
        'details_description',
        'main_photo',
        'details_photo',
        'new_main_photo',
        'new_details_photo',
    ];
}
