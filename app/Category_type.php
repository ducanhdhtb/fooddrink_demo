<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_type extends Model
{
    //
     protected $table="cate_type";
     // 1 category types has many products
     public function products()
     {
     	return $this->hasMany('App\Product','cate_type_id','id');
     }
     public function category()
     {
     	return $this->belongsTo('App\Category','cate_id','id');
     }

}
