<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    //

    public function category()
    {

        $this->belongsTo('App\Models\Category', 'category');
    }

    public function type()
    {

        $this->belongsTo('App\Models\BetType', 'type');
    }

    public function owner()
    {

        $this->belongsTo('App\Models\User', 'owner');
    }
}
