<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Customer as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    //
    protected $table="customers";
    // 1 customer has many comments
    public function comments()
    {
    	return $this->hasMany('App\Comment','customer_id','id');
    }

    public function orders()
    {
    	return $this->hasMany('App\Order','customer_id','id');
    }
}



