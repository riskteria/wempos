<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model {

	public function User(){
		return $this->belongsTo('App\User');
	}

}