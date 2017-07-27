<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller_order_details;

class Seller_order_detailsController extends Controller
{
	public function index(Request $request)
	{
        $where = [];
        if($request->only('deal_time')){
            $name = $request->input('deal_time');
            $where['deal_time'] = $name;
        }
        $list = Seller_order_details::where('deal_time','like','%'.$name.'%')->paginate(2);
        return view("Admin.seller_order_details.index",["list"=>$list,'where'=>$where]);
	}
	//加载编辑页面获取默认信息
	public function edit($id)
    {
       $list = Seller_order_details::where('id',$id)->first();
      	   
      return view('Admin/seller_order_details.edit',['list'=>$list]);
    }
	//执行修改操作
	public function update(Request $request,$id)
    {
        $input = $request->only(['uid','price','deal_time','buyers_id','state']);
		
        $id = seller_order_details::where("id",$id)->update($input);
        if($id>0){
            echo "修改成功!";
        }else{
            echo "失败!";
        }
    }
	//执行删除操作跳转页面
	public function del($id)
    {	
		Seller_order_details::where('id',$id)->delete();
        return redirect('Admin/seller_order_details');
    }
}
