<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CateController extends Controller
{
    //
     //List
    public function getlist(){
        $category=Category::all();
    	return view('admin.cate.list',compact('category'));
    }
    //Add
    public function getAdd()
    {
    	return view('admin.cate.add');

    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            ['txtCateName'=>'required|unique:categories,category_name'],
            [
            'txtCateName.required'=>'Please input your catagory name',
            'txtCateName.unique'=>'Columns already exists!',
            ]);
        $category= new Category;
        $category->category_name=$request->txtCateName;
        $category->save();
        return redirect('admin/category/add')->with('flash','Add successfully!');

    }
    // Edit
    public function getEdit($id)
    {
    	return view('admin.cate.edit');
    }
    //Delete
    public function getDelete($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('admin/category/list')->with('flash','Delete successfully!');
    }
}
