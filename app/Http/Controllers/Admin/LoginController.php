<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;

class LoginController extends Controller
{
    //加载登录界面
    public function login()
    {
        return view('admin.login');
    }

    //执行登录操作
    public function doLogin(Request $request)
    {
        //判断登录
        //获取表单中的内容
        $email = $request->input('email');
        $pass = $request->input('pass');

        //实例化UserControl表
        $user = new Models\UserControl();

        //获取邮箱相对应的管理员信息
        $users = $user->where('email',$email)->first();

        //判断邮箱是否存在
        if (!empty($users)) {
            //判断密码是否正确
            if(md5($pass) == $users->password){
                //写入session
                $request->session()->push('adminuser',$user);
                //并跳转到后台首页
                return redirect('admin');
            }
        }

        //return back()->with('msg',"账号或密码错误!");

    }

    //加载注册界面
    public function register()
    {
        return view('admin.register');
    }

    //执行注册操作
    public function doRegister(Request $request)
    {
        //表单验证
        $this->validate($request, [

            'email' => 'required|unique:users_control|email',
            'name' => 'required|unique:users_control|max:30|alpha_num',
            'password' => 'required|min:8|max:16|alpha_dash',
            'repeatpass' => 'required|min:8|max:16|alpha_dash',
            'phone' => 'required|min:11|max:11',
            'tonyi' => 'accepted',
        ]);

        //获取表单信息
        $list = $request->only('name','email','phone');
        $pass = $request->only('password');

        $password = $pass['password'];

        //实例化UserControl表
        $user = new Models\UserControl();

        $list['addtime'] = date("Y-m-d H:i:s",time());
        $list['modtime'] = date("Y-m-d H:i:s",time());
        $list['password'] = md5($password);
        //添加信息进数据库
        $user->insertGetId($list);

        return redirect("admin/login");

    }
}
