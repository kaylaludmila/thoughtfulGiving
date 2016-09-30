<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Items extends Model

{
    public function user()
    {
    	// protected $fillable =['item']; 

    	return $this->belongsTo(User::class); 
    }
}