<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    protected $fillable = [
        'fullname', 'email', 'password', 'token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'token', 'device'
    ];
}

