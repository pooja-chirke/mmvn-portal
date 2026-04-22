<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Blog extends Model
{
    protected $fillable = ['title', 'description'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }
}