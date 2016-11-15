<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    //
    public $timestamps = false;

    public function chosenBy(){

        return $this->hasMany('App\Models\Choice', 'alternative');
    }
}
