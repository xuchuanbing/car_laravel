<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
	
    public function index(Request $request)
    {
        $where = [];
        if($request->only('phone')){

        $uid = $request->input('phone');
        $where['phone'] = $uid;

            }
        $list = User::where('phone','like','%'.$uid.'%')->paginate(5);
        return view("Admin.user.index",["list"=>$list,'where'=>$where]);
    }
	

}
