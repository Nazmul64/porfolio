<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Whyspecil extends Model
{
    protected $fillable =[

        'title',
        'description',
        'communication_title',
        'communication_description',
        'experience_title',
        'experience_description',
        'safeSecure_title',
        'safeSecure_description',
        'passionfortesting_title',
        'passionfortesting_description',
        'photo',
        'new_photo',
    ];
}
