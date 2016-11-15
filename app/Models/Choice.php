<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    //

    public function alternativeChosen(){

        return $this->belongsTo('App\Models\Alternative', 'alternative');
    }

    public function chosenBy(){

        return $this->belongsToMany('App\Models\User', 'user');
    }
}
