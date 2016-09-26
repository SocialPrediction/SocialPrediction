<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    public $timestamps = false;
    protected $table = "replies";
    public $incrementing = false;

    public function to()
    {

        return $this->belongsTo('App\Models\Comment', 'to');

    }

    public function comment()
    {
        return $this->belongsTo('App\Models\Comment', 'id');
    }
}
