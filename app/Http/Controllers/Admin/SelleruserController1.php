<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Selleruser;


class SelleruserController extends Controller
{
	
    public function index(Request $request)
    {
        $where = [];
        if($request->only('sellerphone')){

        $uid = $request->input('sellerphone');
        $where['sellerphone'] = $uid;

            }
        $list = Selleruser::where('sellerphone','like','%'.$uid.'%')->paginate(5);
        return view("Admin.selleruser.index",["list"=>$list,'where'=>$where]);
    }
	

}
