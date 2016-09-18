<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function type(){
        $this->belongsTo('App\Models\UserType');
    }

    public function mutedUsers(){

        $this->morphToMany('App\Models\UserMute', 'blockee');
    }

    public function mutedBy(){

        $this->morphToMany('App\Model\UserMute', 'blocker');
    }
}
