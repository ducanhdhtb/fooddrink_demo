<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category_type;
use App\Category;

class ProductController extends Controller
{
    //List
    public function getlist(){
        $product=Product::all();
    	return view('admin.product.list',compact('product'));
    }
    //Add
    public function getAdd()
    {
        $category=Category::all();
        $category_type=Category_type::all();
    	return view('admin/product/add',compact('category_type','category'));

    }

     public function postAdd(Request $request)
    {
        //Process
        $product=new Product;
        $product->name=$request->txtName;
        
        // Check image
        if($request->hasfile('txtImage'))
        {
            $file=$request->file('txtImage');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/upload/products/',$name);
            $product->image=$name;
        }
        else
        {
            $product->image="";
        }

        $product->price=$request->txtPrice;
        $product->is_trending=$request->txtTrending;
        $product->summary=$request->txtSummary;
        $product->description=$request->txtDescription;
        $product->cate_type_id=$request->txtCateType;
        $product->save();
        return redirect()->route('add_product_add')->with('flash','Add product successfully!');

    }

    // Edit
    public function getEdit($id)
    {
    	return view('admin.product.edit');
    }

    // Delete
    public function getDelete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('product_list')->with('flash','Delete ok!');
    }

    // Spend for Ajax
    public function getAjax($id)
    {
        $cate_type=Category_type::where('cate_id',$id)->get();

        foreach($cate_type as $ct)
        {
            echo "<option value='$ct->id' > $ct->name </option>";

        }
    }
}
