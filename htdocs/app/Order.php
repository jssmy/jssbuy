<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded	=['id','recived','shipped'];
    protected $table		='orders';

    //relationship
    public function lines()
    {
    	return $this->hasMany('App\LineOrder') ;
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }


    
}
