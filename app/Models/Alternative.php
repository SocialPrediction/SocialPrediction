<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    //
    protected $timestamps = false;

    public function chosenBy(){

        $this->hasMany('App\Models\Choice', 'alternative');
    }
}
