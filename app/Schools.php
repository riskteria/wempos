<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    public function Articles(){
    	return $this->hasMany('App\Articles');
    }
}
