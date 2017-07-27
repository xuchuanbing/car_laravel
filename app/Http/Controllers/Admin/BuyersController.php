<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\buyers;
use App\Http\Controllers\Controller;

class BuyersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        if($request->only('phone')){
            $name = $request->input('phone');
            $where['phone'] = $name;
        }
        $list = Buyers::where('phone','like','%'.$name.'%')->paginate(5);
        return view("Admin.buyers.index",["list"=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function edit($id){
        $list = Buyers::where("id",$id)->first();
        return view("Admin.buyers.edit",['list'=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {
        $detection_mes = new Buyers;
        $id = $request->input('id');
        $list = $request->only('uid','phone','zixun');

        $id = $detection_mes->where('id',$id)->update($list);

        if($id>0){

            session()->put("ff","修改成功！");
            
            return redirect('admin/buyers');

        }else{
            session()->put("ff","修改失败！");
            
            return redirect('Admin/buyers/edit');
        }
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buyers::where("id",$id)->delete();
        session()->put("ff","删除成功！");
        return redirect('Admin/buyers');
    }
}
