<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    //
    protected $timestamps = false;
    protected $table = "user_types";

    public function users(){

        return $this->hasMany('App\Models\User', 'user_type');
    }
}
