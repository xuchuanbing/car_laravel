<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserControl;
use Illuminate\Pagination\LengthAwarePaginator;

class UserControlController extends Controller
{
    public function index()
    {
		$user = UserControl::all();
		//$users = UserControl::where('name','=','lili')->paginate(15);
        return view("Admin.user_control.index",compact('user',$user));
    }
	
	
	public function edit($id)
	{
		$list = UserControl::find($id);
		return view("Admin.user_control.create",compact('list',$list));
	}
	
	public function update(Request $request,$id)
	{
		$data = $request->only('name','password','email','phone','state');
		//dd($data);

		
		$dd = UserControl::where('id',$id)->update($data);
		//dd($dd);
		if($dd>0){
			//echo "修改成功!";
            return redirect('admin/usercontrol');
        }else{
            return back()->with("err","修改失败!");
        }
	
	}
	
	public function delete($id)
	{
			$post = UserControl::find($id);
			//dd($post);
			$post->delete();
			/* if($post->trashed()){
				echo '软删除成功！';
				dd($post);
			}else{
				echo '软删除失败！';
			} */
	}	
} 
