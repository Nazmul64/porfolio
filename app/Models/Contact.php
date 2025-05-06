<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
        'email_1',
        'email_2',
        'address',
        'number_1',
        'number_2',
        'photo',
        'new_photo',
    ];
}
