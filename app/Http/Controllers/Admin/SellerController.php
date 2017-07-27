<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\seller;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        if($request->only('selleruser_id')){
            $name = $request->input('selleruser_id');
            $where['selleruser_id'] = $name;
        }
        $list = Seller::where('selleruser_id','like','%'.$name.'%')->paginate(5);
        return view("Admin.seller.index",["list"=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.seller.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Seller::where("id",$id)->first();
        return view("Admin.seller.edit",['list'=>$list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seller = new Seller();
        $list = $request->only('uid','name','phone','appointment','address','commodity_id','brand','car','particular_year','mileage','car_condition','demand','seller_id');
        
        $seller->where('id',$id)->update($list);

        return redirect("Admin/seller");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Detection::where("id",$id)->delete();
        session()->put("ff","删除成功！");
        return redirect('Admin/detection');
    }
}
