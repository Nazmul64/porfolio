<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable =[
            'about_us',
            'description',
            'our_history',
            'history_description',
            'our_mission',
            'mission_description',
            'who_we_are',
            'who_we_are_description',
            'photo',
            'new_photo',
    ];
}
