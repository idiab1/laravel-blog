<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";

    protected $fillable= [
        'gender', 'address', 'bio', 'facebook_url', 'linkedin_url', 'user_id'
    ];

    public function user(){

        return $this->belongsTo('App\User', 'user_id');

    }


}
