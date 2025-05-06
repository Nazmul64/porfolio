<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ourteam extends Model
{
    protected $fillable =[
      'title',
      'description',
      'name',
      'position',
      'maindescription',
      'photo',
      'new_photo',
    ];
}
