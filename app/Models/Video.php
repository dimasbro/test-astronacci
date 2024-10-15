<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $primaryKey = 'video_id';

    protected $fillable = [
        'video_name',
        'video_description',
        'video_url'
    ];

}
