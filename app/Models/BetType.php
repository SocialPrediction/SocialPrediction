<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BetType extends Model
{
    //
    protected $timestamps = false;
    protected $table = "bet_types";

    public function betsOfType()
    {

        $this->hasMany('App\Models\Bet', 'type');
    }
}
