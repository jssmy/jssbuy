<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
	protected $guarded 	= ['id','slug'];
	protected $table		= 'products';


	//relationship
	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function lines()
	{
		return $this->hasMany('App\LineOrder');
	}




}
