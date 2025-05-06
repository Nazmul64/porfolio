<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recentworks extends Model
{
    protected $fillable = [
        'title',
        'description',
        'projecttitle',
        'projectdescription',
        'detailstitle',
        'detailsdescription',
        'clientname',
        'category',
        'date',
        'livepreview',
        'photo',
        'detailsphoto',
        'detailsphoto1',
        'detailsphoto2',
        'detailsphoto3',
        'new_detailsphoto1',
        'new_detailsphoto2',
        'new_detailsphoto3',
    ];
    
}
