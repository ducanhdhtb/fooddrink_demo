<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="products";
    // 1 product  has many  order details
    public function order_details()
    {
    	return $this->hasMany('App\Order_detail','product_id','id');
    }
    // 1 product belongs to a category type
    public function category_type()
    {
    	return $this->belongsTo('App\Category_type','cate_type_id','id');
    }
    // 1product has many comments
    public function comments()
    {
    	return $this->hasMany('App\Comment','product_id','id');
    }

}
