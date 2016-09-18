<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories";

    public function bets()
    {

        $this->hasMany('App\Models\Bet', 'category');
    }
}
