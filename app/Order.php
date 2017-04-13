<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
     protected $table="orders";

     // 1 order belongs to 1 1 customer only
     public function  customer()
     {
     	return $this->belongsTo('App\Customer','customer_id','id');
     }

     // 1 order has many order details
      public function  order_details()
     {
     	return $this-> hasMany('App\Order_detail','order_id','id');
     }
}
