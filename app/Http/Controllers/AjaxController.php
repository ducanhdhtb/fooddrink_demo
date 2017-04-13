<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Category_type;
use App\Product;


class AjaxController extends Controller
{
    //
    public function getAjax($categoryid)
    {
    	$category_type=Category_type::where('cate_id', $categoryid)->get();
    	foreach($category_type as $ct)
    	{
    		echo "<option value='$ct->id'>$ct->name</option>";
    	}
    }
    // Ajax calls back sub_Category
    public function getCategory($category)
    {
    	$sub_category=Category_type::where('cate_id', $category)->get();
        echo "<option value=\"0\" disabled=\"true\" selected=\"true\">Select Category</option>";
    	foreach($sub_category as $sc)
    	{

    		echo "<option value='$sc->id'>$sc->name</option>";
    	}

    }
    // Ajax calls back for products
    public function getProduct($subcategory)
    {
    	$product=Product::where('cate_type_id',$subcategory)->orderBy('id','desc')->get();
        return view('ajax',compact('product'));

    }
}
