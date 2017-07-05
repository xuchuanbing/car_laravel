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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin',"Admin\IndexController@index"); //加载后台登录界面
//Route::resource('buyers_order_details', 'Buyers_order_detailsController');
//Route::resource('seller_order_details', 'Seller_order_detailsController');

Route::get('/admin/login',"Admin\LoginController@login"); //加载后台登录界面
Route::post('/admin/doLogin',"Admin\LoginController@doLogin"); //执行后台登录
Route::get('/admin/register',"Admin\LoginController@register"); //加载后台注册界面
Route::post('/admin/doRegister',"Admin\LoginController@doRegister"); //加载后台注册界面
Route::get('/admin/quit',"Admin\LoginController@quit"); //退出登录

//Route::get('/user','UserController@index');
Route::group(['prefix' => 'admin','middleware' => 'admin'],function(){
    Route::get('/','Admin\IndexController@index');
    Route::get('/user','Home\UserController@index');
    Route::get('/user','Admin\UserController@index');
    Route::get('/usercontrol/delete/{id}','Admin\UserControlController@delete');
    Route::get('/usercontrol','Admin\UserControlController@index');
	Route::get('/usercontrol/edit/{id}','Admin\UserControlController@edit');
	Route::post('/usercontrol/update/{id}','Admin\UserControlController@update');
    Route::get('/buyers','Admin\BuyersController@index');
    Route::get('/seller','Admin\SellerController@index');
    Route::post('detection/store', 'Admin\detection\DetectionController@store');
    //Route::delete('detection/{$id}/destroy', 'Admin\detection\DetectionController@destroy');
	//Route::put('detection/update/{$id}','Admin\detection\DetectionController@update');
	// Route::put('detection/{$id}', function(){
	// 	return "a";
	// });
	Route::resource('/detection', "Admin\detection\DetectionController");
	Route::get('/brand','BrandController@index');
    Route::get('/series','SeriesController@index');
    Route::get('/audi','AudiController@index');
    Route::get('/notfound','NotfoundController@index');
    Route::get('/buyers', "Home\IndexController@index");
});

Route::group(['prefix' => 'home','middleware' => 'home'],function(){
    Route::get('/buyers', "Home/IndexController@index");
});
