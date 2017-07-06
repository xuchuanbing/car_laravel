<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserControl;


class UserCaoController extends Controller
{
    public function index()
    {
		$user = UserControl::where('state',0)->get();
		//dd($user);
        return view("Admin.user_control.cao",compact('user',$user));
    }

}
