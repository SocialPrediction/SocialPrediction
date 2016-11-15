<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BetComment extends Model
{
    //
    public $timestamps = false;
    protected $table = "bet_comments";

    public function bet()
    {

        return $this->belongsTo('App\Models\Bet', 'bet');
    }

    public function comment()
    {
        return $this->belongsTo('App\Models\Comment', 'comment');

    }
}
