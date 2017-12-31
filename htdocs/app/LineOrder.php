<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineOrder extends Model
{
    // 
    protected $guarded 	= ['id','slug'];
    protected $table		= 'lineorders';


    public function order()
    {
    	return $this->belonsTo('App\Order');
    }

    public function product()
    {
    	return $this->belonsTo('App\Product');
    }



}
