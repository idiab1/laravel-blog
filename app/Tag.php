<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = [
        'tag'
    ];

    // relationship between tags and post
    public function posts(){

        return $this->belongsToMany('App\Post');
    }
}
