<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineCourse extends Model
{
    protected $table = 'online_courses';

    protected $fillable = [
        'title',
        'description',
        'image',
        'duration',
        'level'
    ];
}