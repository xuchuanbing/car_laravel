<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
		$user = User::all();
		//dd($user);
        return view("Admin.user.index",compact('user',$user));
    }
	
	public function edit($id)
	{
		$list = User::find($id);
		return view("Admin.user.create",compact('list',$list));
	}
	
	public function update(Request $request,$id)
	{
	    $list = User::find($id);
		$list->phone = $request->phone;
		$list->IP = $request->getClientIp();
		$dd = $list->save();
		   if($dd>0){
            return redirect('admin/user');
        }else{
            return back()->with("err","修改失败!");
        }
        
    }
	

}
