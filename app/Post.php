<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    //

    protected $fillable = [
        'slug', 'title', 'excerpt',
    ];
    use SoftDeletes;
    protected $table = 'posts';
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
   /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */

}
