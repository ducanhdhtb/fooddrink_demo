<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
     protected $table="comments";
     // 1 comment belong to customer
     public function customer()
     {
     	return $this->belongsTo('App\Customer','customer_id','id');
     } 

     public function comment()
     {
     	return $this->belongsTo('App\Product','product_id','id');
     }

}
