<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMute extends Model
{
    //
    protected $timestamps = false;

    public function blocker(){

        $this->belongsTo('App\Models\User', 'blocker');
    }

    public function blockee(){

        $this->belongsTo('App\Model\User', 'blockee');
    }
}
