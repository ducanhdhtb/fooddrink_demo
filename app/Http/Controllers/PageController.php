<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Category_type;
use App\Product;
use App\Http\Controllers;
use Cart;

use DB;
use App\Quotation;


class PageController extends Controller
{
    function __construct()
    {
      $category=Category::all();
      view()->share('category',$category);
      
    }
    // Index
    public function getIndex()
    {
   
        $product=Product::orderBy('id','desc')->where('is_trending','=',0)->take(8)->get();
        $product_feature=Product::orderBY('id','desc')->where('is_trending','=',1)->take(8)->get();
    	return view('pages.layout.index',compact('product','product_feature'));
    }
    // Register
    public function getRegister()
    {
    	return view('pages.register');
    }
    //Login
    public function getLogin()
    {
    	return view('pages.login');
    }
    //Show category type
    public function getCateType($id)
    {
        $category_type_name=Category_type::find($id);
        $product=Product::where('cate_type_id',$id)->paginate(8);
        return view('pages.cate_type',compact('product','category_type_name'));
       
    }
     //Cart
    public function getCart($id)
    {
        $product_buy=DB::table('products')->where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->image)));
        $content=Cart::content();
       


        return view('pages.shoppingcart',compact('content'));
        //print_r($content);

    }
}
