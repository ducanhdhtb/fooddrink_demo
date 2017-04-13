<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// index---------------------------
Route::get('/',['as'=>'index','uses'=>'PageController@getIndex']);
// Ajax show selected form
Route::get('category/{category}',['as'=>'Ajax','uses'=>'AjaxController@getCategory']);
use App\Product;

route::get('test',function(){
	return view('ajax');
});
// Ajax show products
Route::get('product/{subcategory}',['as'=>'Ajax','uses'=>'AjaxController@getProduct']);
//Category type
Route::get('category_type/{id}/{category_name}.html',['as'=>'cate_type','uses'=>'PageController@getCateType']);
//     Register
Route::get('register',['as'=>'register','uses'=>'PageController@getRegister']);
//    Login
Route::get('login',['as'=>'login','uses'=>'PageController@getLogin']);
//    shopping cart
Route::get('addcart/{id}',['as'=>'cart','uses'=>'PageController@getCart']);


//------------------------------------------ADMIN----------------------------------------------------------
Route::group(['prefix'=>'admin'],function(){
	
	//-------------Route user--------------------------------------------------------
	Route::group(['prefix'=>'user'],function(){
		//List
		route::get('list','UserController@getlist');
		//Add
		route::get('add','UserController@getAdd');
		route::post('add','UserController@postAdd');
		//Update
		route::get('edit/{id}','UserController@getEdit');
		route::post('edit/{id}','UserController@postEdit');
		//Delete
		route::get('delete/{id}','UserController@getdelete');
	});


	// ----------------------Route product ------------------------------------------
	Route::group(['prefix'=>'product'],function(){
		//List
		route::get('list',['as'=>'product_list','uses'=>'ProductController@getlist']);
		//Add
		route::get('add',['as'=>'add_product_add','uses'=>'ProductController@getAdd']);
		route::post('add',['as'=>'add_product_post','uses'=>'ProductController@postAdd']);
		//Update
		route::get('edit/{id}','ProductController@getEdit');
		route::post('edit/{id}','ProductController@postEdit');
		//Delete
		route::get('delete/{id}','ProductController@getdelete');
		

	});

		// ----------------------Route category ------------------------------------------
	Route::group(['prefix'=>'category'],function(){
		//List
		route::get('list','CateController@getlist');
		//Add
		route::get('add','CateController@getAdd');
		route::post('add','CateController@postAdd');
		//Update
		route::get('edit/{id}','CateController@getEdit');
		route::post('edit/{id}','CateController@postEdit');
		//Delete
		route::get('delete/{id}','CateController@getDelete');
	});

		// ----------------------Route category type------------------------------------------
	Route::group(['prefix'=>'category_type'],function(){
		//List
		route::get('list',['as'=>'cate_type_list','uses'=>'CateTypeController@getlist']);
		//Add
		route::get('add',['as'=>'cate_type_add_get','uses'=>'CateTypeController@getAdd']);
		route::post('add',['as'=>'cate_type_add_post','uses'=>'CateTypeController@postAdd']);
		//Update
		route::get('edit/{id}','CateTypeController@getEdit');
		route::post('edit/{id}','CateTypeController@postEdit');
		//Delete
		route::get('delete/{id}','CateTypeController@getDelete');
	});
	//------------------------ Route order -------------------------------------------

	Route::group(['prefix'=>'order'],function(){
		//List
		route::get('list','OrderController@getlist');
		//Add
		route::get('add','OrderController@getAdd');
		route::post('add','OrderController@postAdd');
		//Update
		route::get('edit/{id}','OrderController@getEdit');
		route::post('edit/{id}','OrderController@postEdit');
		//Delete
		route::get('delete/{id}','OrderController@getdelete');
	});

	//Route danh rieng cho ajax
	Route::group(['prefix'=>'ajax'],function(){
		route::get('category/{categoryid}','AjaxController@getAjax');
	
		});


});
