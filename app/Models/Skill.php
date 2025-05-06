<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable =[
        'skills_title',
        'skills_description',
        'skills_name',
        'skills_count',
    ];
}
