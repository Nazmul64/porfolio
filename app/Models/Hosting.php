<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    protected $fillable = [
        'title',
        'description',
        'clouddatabases',
        'websitehosting',
        'filestorage',
        'forextrading',
        'filebackups',
        'remotedesktop',
        'emailservers',
        'hybridcloud',
        'photo',
        'new_photo',
    ];
    
}
