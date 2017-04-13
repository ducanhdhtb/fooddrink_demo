<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
     //List
    public function getList(){
    	return view('admin.order.list');
    }
    // Add
    public function getAdd()
    {
    	return view('admin.order.add');
    }
    // Edit
    public function getEdit()
    {
    	return view('admin.order.edit');
    }
}
