<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $timestamps = false;
    protected $table = "replies";

    public function to()
    {

        return $this->belongsTo('App\Models\Comment', 'to');

    }

    public function from()
    {
        return $this->belongsTo('App\Models\Comment', 'from');
    }
}
