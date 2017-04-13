<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //List
    public function getList(){
    	return view('admin.user.list');
    }
    // Add
    public function getAdd()
    {
    	return view('admin.user.add');
    }
    // Edit
    public function getEdit()
    {
    	return view('admin.user.edit');
    }

}
