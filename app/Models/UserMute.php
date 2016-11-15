<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMute extends Model
{
    //
    public $timestamps = false;
    protected $table = "user_mutes";

    public function blocker(){

        return $this->belongsToMany('App\Models\User', 'blocker');
    }

    public function blockee(){

        return $this->belongsToMany('App\Model\User', 'blockee');
    }
}
