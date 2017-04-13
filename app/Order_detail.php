<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    //
     protected $table="order_details";
     // 1 order details has many products
     public function products()
     {
     	return $this->hasMany('App\Product','product_id','id');
     }
     // 1 order detail belongs to Order 
     public function order()
     {
     	return $this->belongsTo('App\Order','order_id','id');
     }
}
