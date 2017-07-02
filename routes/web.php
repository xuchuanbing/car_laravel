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


Route::group(['prefix' => 'admin','middleware' => 'admin'],function(){
    Route::get('/','Admin\IndexController@index');
    Route::get('/user','Home\UserController@index');
    Route::get('/usercontrol','Admin\UserControlController@index');
    Route::get('/buyers','Admin\BuyersController@index');
    Route::get('/seller','Admin\SellerController@index');
});

Route::group(['prefix' => 'home','middleware' => 'home'],function(){

});