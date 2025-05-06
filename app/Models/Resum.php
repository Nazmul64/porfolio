<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resum extends Model
{
   protected $fillable =[
    'resum_title',
    'resum_description',
    'date_of_brith',
   ];
}
