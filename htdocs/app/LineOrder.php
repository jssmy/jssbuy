<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineOrder extends Model
{
    //
    protected $guarded=['id',];
    protected $table='linesorders';

    public function order()
    {
    	return $this->belongsTo('\App\Order');
    }

    public function product(){
    	return $this->belongsTo('\App\Product');
    }
}
