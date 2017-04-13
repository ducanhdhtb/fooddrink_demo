<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Category_type;

class CateTypeController extends Controller
{
    //List
    public function getList()
    {
    	$cate_type=Category_type::all();
    	return view('admin.cate_type.list',compact('cate_type'));
    }
    //Delete
    public function getDelete($id)
    {
    	$cate_type=Category_type::find($id);
    	$cate_type->delete();
        return redirect()->route('cate_type_list')->with('flash','Delete successfully!');
    	
    }
    //Add
    public function getAdd()
    {
        $category=Category::all();
        return view('admin.cate_type.add',compact('category'));
    }

    public function postAdd(Request $request)
    {
        $category_type=new Category_type;
        $category_type->name=$request->txtCateType;
        $category_type->cate_id=$request->txtCateName;
        $category_type->save();
        return redirect()->route('cate_type_add_get')->with('flash','Add successfully!');
    }
}
