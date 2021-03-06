<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
	protected $table='products';
	protected $guarded=['id'];
	

	public function category()
	{
		return $this->belongsTo('\App\Category');
	}

	public function linesorders()
	{
		return $this->hasMany('\App\LineOrder');
	}

}

