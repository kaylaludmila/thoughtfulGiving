<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function lists()
    {
    	return $this->hasMany(List::class); 
    }
}
