<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    //

    public function alternativeChosen(){

        $this->belongsTo('App\Models\Alternative', 'alternative');
    }

    public function chosenBy(){

        $this->belongsToMany('App\Models\User', 'user');
    }
}
