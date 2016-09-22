<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BetAlternative extends Model
{
    //
    public $timestamps = false;
    protected $table = "bet_alternatives";

    public function bet()
    {

        return $this->belongsTo('App\Models\Bet', 'bet');
    }

    public function alternative()
    {

        return $this->belongsTo('App\Models\Alternative', 'alternative');
    }
}
