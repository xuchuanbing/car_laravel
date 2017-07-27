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

Route::get('/',"Home\IndexController@index");

Route::get('/admin/login',"Admin\LoginController@login"); //加载后台登录界面
Route::post('/admin/doLogin',"Admin\LoginController@doLogin"); //执行后台登录
Route::get('/admin/register',"Admin\LoginController@register"); //加载后台注册界面
Route::post('/admin/doRegister',"Admin\LoginController@doRegister"); //加载后台注册界面
Route::get('/admin/quit',"Admin\LoginController@quit"); //退出登录

//Route::get('/user','UserController@index');


Route::group(['prefix' => 'admin','middleware' => 'admin'],function(){

    Route::get('/','Admin\IndexController@index');  //加载后台登录界面

    Route::get('/user','Admin\UserController@index');
    Route::get('/user/edit/{id}','Admin\UserController@edit');
    Route::get('/user/update','Admin\SelleruserController@update');

    Route::get('/selleruser',"Admin\SelleruserController@index");
    Route::get('/selleruser/{id}/edit','Admin\SelleruserController@edit');
    Route::put('/selleruser/update/{id}','Admin\SelleruserController@update');

    Route::get('/usercontrol/delete/{id}','Admin\UserControlController@delete');
    Route::get('/usercontrol','Admin\UserControlController@index');
	Route::get('/usercontrol/edit/{id}','Admin\UserControlController@edit');
	Route::post('/usercontrol/{id}','Admin\UserControlController@update');
    
    Route::get('/seller','Admin\SellerController@index');
    Route::get('/seller/create','Admin\SellerController@create');
    Route::post('/seller/store','Admin\SellerController@store');
    Route::delete('/seller/destroy/{id}','Admin\SellerController@destroy');
    Route::get('seller/{id}/edit','Admin\SellerController@edit');
    Route::put('seller/{id}','Admin\SellerController@update'); 

    Route::get('/seller_orders','Admin\Seller_ordersController@index');
    Route::get('/seller_orders/create','Admin\Seller_ordersController@create');
    Route::post('/seller_orders/store','Admin\Seller_ordersController@store');
    Route::delete('/seller_orders/destroy/{id}','Admin\Seller_ordersController@destroy');
    Route::get('seller_orders/{id}/edit','Admin\Seller_ordersController@edit');
    Route::put('seller_orders/{id}','Admin\Seller_ordersController@update');
	
    Route::get('/seller_order_details', 'Admin\Seller_order_detailsController@index');//卖家订单详情管理显示页面
	Route::get('/seller_order_details/edit/{id}','Admin\Seller_order_detailsController@edit');//加载编辑页面
	Route::post('/seller_order_details/update/{id}','Admin\Seller_order_detailsController@update');//执行修改
	Route::delete('/seller_order_details/del/{id}','Admin\Seller_order_detailsController@del');//执行删除

    Route::get('/buyers','Admin\BuyersController@index');
    Route::get('/buyers/create','Admin\BuyersController@create');
    Route::post('/buyers/store','Admin\BuyersController@store');
    Route::delete('/buyers/destroy/{id}','Admin\BuyersController@destroy');
    Route::get('/buyers/edit/{id}','Admin\BuyersController@edit');
    Route::put('buyers/{id}','Admin\BuyersController@update'); 

    Route::get('/buyers_orders','Admin\Buyers_ordersController@index');
	
	Route::get('/buyers_order_details', 'Admin\Buyers_order_detailsController@index');//买家订单详情管理
	Route::get('/buyers_order_details/edit/{id}','Admin\Buyers_order_detailsController@edit');//加载编辑页面
	Route::post('/buyers_order_details/update/{id}','Admin\Buyers_order_detailsController@update');//执行修改
	Route::delete('/buyers_order_details/del/{id}','Admin\Buyers_order_detailsController@del');//执行删除

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

    Route::get('/detection_mes','Admin\Detection_mes\Detection_mesController@index');
    Route::get('/detection_mes/create','Admin\Detection_mes\Detection_mesController@create');
    Route::post('/detection_mes/store','Admin\Detection_mes\Detection_mesController@store');
    Route::delete('/detection_mes/destroy/{id}','Admin\Detection_mes\Detection_mesController@destroy');
    Route::get('detection_mes/{id}/edit','Admin\Detection_mes\Detection_mesController@edit');
    Route::put('detection_mes/{id}','Admin\Detection_mes\Detection_mesController@update');

    Route::get('/motor_details','Admin\Motor_details\Motor_detailsController@index');
    Route::get('/motor_details/create','Admin\Motor_details\Motor_detailsController@create');
    Route::post('/motor_details/store','Admin\Motor_details\Motor_detailsController@store');
    Route::delete('/motor_details/destroy/{id}','Admin\Motor_details\Motor_detailsController@destroy');
    Route::get('motor_details/{id}/edit','Admin\Motor_details\Motor_detailsController@edit');
    Route::put('motor_details/{id}','Admin\Motor_details\Motor_detailsController@update');
    
    Route::get('/car_picname','Admin\Car_picnameController@index');

    Route::get('/car_peizhi','Admin\Car_peizhiController@index');
    Route::get('/car_peizhi/create','Admin\Car_peizhiController@create');
    Route::post('/car_peizhi/store','Admin\Car_peizhiController@store');

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




    Route::get('/', "Home\IndexController@index");
    Route::get('/home/details/{id}', "Home\IndexController@details");
    Route::get("/home/myCode","Home\MycodeController@code");
    Route::get("/home/doCode","Home\MycodeController@doCode");
    Route::get('/home/buyers', "Home\IndexController@buyers");
    Route::get('/home/out', "Home\MycodeController@out");

    Route::get('/home/fenqi', "Home\IndexController@fenqi");
    Route::get('/home/fuwubozhang', "Home\IndexController@fuwubozhang");
    Route::get('/home/guyuwomeng', "Home\IndexController@guyuwomeng");
    Route::get('/home/index', "Home\IndexController@index");
    Route::get('/home/jaru', "Home\IndexController@jaru");
    Route::get('/home/pinggushi', "Home\IndexController@pinggushi");
    Route::get('/home/seller', "Home\IndexController@seller");
    Route::get('/home/wenda1', "Home\IndexController@wenda1");

    Route::get("/home/sellers", "Home\IndexController@sellers");

Route::group(['prefix' => 'home','middleware' => 'home'],function(){


    //Route::get('/userstore', "Home\IndexController@userstore");        //收藏车辆
    Route::get('/userreduce', "Home\IndexController@userreduce");       //降价提醒
    //Route::get('/userhistory', "Home\IndexController@userhistory");      //浏览记录
    Route::get('/center', "Home\PersonController@index");
    //个人中心
    Route::get('/person', "Home\PersonController@index");
    Route::get('/collection/{id}', "Home\PersonController@collection");
    Route::get('/pricereminder/{id}', "Home\PersonController@pricereminder");
    Route::get('/pricereminder/del/{id}', "Home\PersonController@pricereminderdel");
    Route::get('/userstore', "Home\PersonController@userstore");

    Route::get('/person/userhistory', "Home\PersonController@userhistory");

    Route::get('/userhistory/del/{id}', "Home\PersonController@userhistorydel");
    Route::get('/userstore/del/{id}', "Home\PersonController@userstoredel");

});
