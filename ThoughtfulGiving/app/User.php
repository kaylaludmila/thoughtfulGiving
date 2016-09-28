<?php

namespace App;
use Lists;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company','firstName', 'lastName', 'email', 'phoneNumber','mission', 'logoURL', 'bannerURL', 'siteLink','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function lists()
    {
    	return $this->hasMany(Lists::class); 
    }
}

