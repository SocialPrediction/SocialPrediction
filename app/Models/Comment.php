<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function from(){

        return $this->belongsTo('App\Models\User');
    }
}
