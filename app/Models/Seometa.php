<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seometa extends Model
{
    protected $fillable =[
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_focus_keywords',
       
    ];
}
