<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Models\Buyers_order_details;
use App\Http\Controllers\Controller;
class Buyers_order_detailsController extends Controller
{
    //
	public function index()
	{
		
		$list = \DB::table("buyers_order_details")->get();
		return view("Admin.buyers_order_details.buyers_order_details",["list"=>$list]);
	}
	
	public function edit($id)
    {
       $list = Buyers_order_details::where('id',$id)->first();
       	   
      return view('Admin/buyers_order_details.edit',['list'=>$list]);
    }
	
	public function update(Request $request,$id)
    {
        $input = $request->only(['uid','price','deal_time','seller_id','state']);
		
        $id = buyers_order_details::where("id",$id)->update($input);
        if($id>0){
            echo "修改成功!";
        }else{
            echo "失败!";
        }
    }
	
	public function del($id)
    {	
		Buyers_order_details::where('id',$id)->delete();
        return redirect('/admin/buyers_order_details');
    }
}
