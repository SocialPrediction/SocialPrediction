<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bet extends Model
{
    //

    public function category()
    {

        return $this->belongsTo('App\Models\Category', 'category');
    }

    public function type()
    {

        return $this->belongsTo('App\Models\BetType', 'type');
    }

    public function owner()
    {

        return $this->belongsTo('App\Models\User', 'owner');
    }

    public function alternatives()
    {

        return $this->hasManyThrough(
            'App\Models\Alternatives',
            'App\Models\Bet',
            'alternative',
            'id',
            'id');
    }

    public function comments()
    {

        return DB::table('comments')->whereNotIn('id', function ($q) {
            $q->select('from')->from('bet_comments');
        })->get();
    }
}
