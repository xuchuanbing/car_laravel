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
	Route::get('/brand','BrandController@index');
    Route::get('/series','SeriesController@index');
    Route::get('/audi','AudiController@index');
    Route::get('/notfound','NotfoundController@index');



    Route::get('/detection','Admin\Detection\DetectionController@index');
    Route::get('/detection/create','Admin\Detection\DetectionController@create');
    Route::post('/detection/store','Admin\Detection\DetectionController@store');
    Route::delete('/detection/destroy/{id}','Admin\Detection\DetectionController@destroy');
    Route::get('detection/{id}/edit','Admin\Detection\DetectionController@edit');
    Route::put('detection/{id}','Admin\Detection\DetectionController@update');


    Route::get('/motor_details','Admin\Motor_details\Motor_detailsController@index');
    Route::get('/motor_details/create','Admin\Motor_details\Motor_detailsController@create');
    Route::post('/motor_details/store','Admin\Motor_details\Motor_detailsController@store');
    Route::delete('/motor_details/destroy/{id}','Admin\Motor_details\Motor_detailsController@destroy');
    Route::get('motor_details/{id}/edit','Admin\Motor_details\Motor_detailsController@edit');
    Route::put('motor_details/{id}','Admin\Motor_details\Motor_detailsController@update');



    
    Route::get('/buyers', "Home\IndexController@index");
	Route::get('/brand','Admin\BrandController@index');
    Route::get('/brand/create','Admin\BrandController@create');
    Route::post('/brand/store','Admin\BrandController@store');
    Route::get('/brand/edit/{id}','Admin\BrandController@edit');
    Route::put('/brand/update/{id}','Admin\BrandController@update');
	Route::get('/brand/destroy/{id}','Admin\BrandController@destroy');
	Route::get('/audi','Admin\AudiController@index');
    Route::get('/audi/create','Admin\AudiController@create');
    Route::post('/audi/store','Admin\AudiController@store');
    Route::get('/audi/edit/{id}','Admin\AudiController@edit');
    Route::put('/audi/update/{id}','Admin\AudiController@update');
	Route::get('/audi/destroy/{id}','Admin\AudiController@destroy');
});

Route::group(['prefix' => 'home','middleware' => 'home'],function(){
    Route::get('/', "Home\IndexController@index");
    Route::get('/buyers', "Home\IndexController@buyers");
    Route::get('/buyers2', "Home\IndexController@buyers2");
    Route::get('/details', "Home\IndexController@details");
    Route::get('/fenqi', "Home\IndexController@fenqi");
    Route::get('/fuwubozhang', "Home\IndexController@fuwubozhang");
    Route::get('/guyuwomeng', "Home\IndexController@guyuwomeng");
    Route::get('/index', "Home\IndexController@index");
    Route::get('/jaru', "Home\IndexController@jaru");
    Route::get('/pinggushi', "Home\IndexController@pinggushi");
    Route::get('/seller', "Home\IndexController@seller");
    Route::get('/shouye', "Home\IndexController@shouye");
    Route::get('/wenda1', "Home\IndexController@wenda1");
    Route::get('/wenda2', "Home\IndexController@wenda2");
    Route::get('/wenda3', "Home\IndexController@wenda3");
});
