<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=['recived','shipped','total','user_id'];
    protected $table='orders';

    public function user()
    {
    	return $this->belongsTo('\App\User');
    }

    public function lines()
    {
    	return $this->hasMany('\App\LineOrder');
    }
}
