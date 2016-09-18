<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function from()
    {

        return $this->belongsTo('App\Models\User');
    }

    public function replies()
    {

        return $this->hasManyThrough(
            'App\Models\Comment',
            'App\Models\Reply',
            'from',
            'id',
            'id');

    }
}
