<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
     protected $table="categories";
     public $timestamps=false;
     // 1 category has many cate_type
     public function category_types()
     {
     	return $this->hasMany('App\Category_type','cate_id','id');
     }

     // Lien ket qua bang trung gian
      public function products()
    {
    	return $this->hasManyThrough('App\Product','App\Category_type','cate_id','cate_type_id','id');
    }
}
