<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    protected $fillable =[
        'title',
        'review',
        'description',
        'photo',
        'new_photo',
    ];
}
