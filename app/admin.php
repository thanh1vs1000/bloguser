<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;

class admin extends Authenticatable
{
    protected $table = 'admin';


    protected  $fillable = [
        'username','password','email','remember_token'
    ];

    protected  $hidden = [
        'password','remember_token',
    ];

}
