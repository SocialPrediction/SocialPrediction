<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BetType extends Model
{
    //
    public $timestamps = false;
    protected $table = "bet_types";

    public function betsOfType()
    {

        return $this->hasMany('App\Models\Bet', 'type');
    }
}
