<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Models\Seller_order_details;
use App\Http\Controllers\Controller;
class Seller_order_detailsController extends Controller
{
    //
	public function index()
	{
		
		$list = \DB::table("seller_order_details")->get();
		return view("Admin.seller_order_details.seller_order_details",["list"=>$list]);
	}
	
	public function edit($id)
    {
       $list = Seller_order_details::where('id',$id)->first();
       //print_r($list);	   
      return view('Admin/seller_order_details.edit',['list'=>$list]);
    }
	
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
	
	public function del($id)
    {	
		Seller_order_details::where('id',$id)->delete();
        return redirect('/admin/seller_order_details');
    }
}
