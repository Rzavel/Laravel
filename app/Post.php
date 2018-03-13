<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'slug', 'title', 'excerpt',
    ];
}