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

    public function type()
    {
        return $this->belongsTo('App\Models\UserType');
    }

    public function mutedUsers()
    {

        return $this->hasManyThrough(
            'App\Models\User',      // What we want returned
            'App\Model\UserMute',   // What is in between
            'blockee',              // foreign key on userMute
            'id',                   // id on the Users we are fetching
            'id');                  // this id
    }

    public function mutedBy()
    {

        return $this->hasManyThrough(
            'App\Model\User',       // What we want returned
            'App\Model\UserMute',   // What is in between
            'blocker',              // foreign key on userMute
            'id',                   // id on the Users we are fetching
            'id');                  // this id
    }

    public function comments(){

        return $this->hasMany('App\Model\Comment', 'from');
    }
}
