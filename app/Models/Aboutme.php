<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    protected $fillable = [
        'about_title',
        'about_description',
        'name',
        'date_of_brith',
        'address',
        'zip',
        'email',
        'phone',
        'project_text',
        'photo',
        'new_photo',
    ];

}
