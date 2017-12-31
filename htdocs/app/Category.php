<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

	protected $guarded=['id','slug'];
	protected $table='categories';

	//relationship
	public function products()
	{
		return $this->hasMany('App\Product');
	}



}
