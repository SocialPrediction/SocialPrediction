<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMute extends Model
{
    //
    protected $timestamps = false;
    protected $table = "user_mutes";

    public function blocker(){

        $this->morphedByMany('App\Models\User', 'blocker');
    }

    public function blockee(){

        $this->morphedByMany('App\Model\User', 'blockee');
    }
}
