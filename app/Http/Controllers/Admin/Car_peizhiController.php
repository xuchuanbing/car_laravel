<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car_peizhi;

class Car_peizhiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        if($request->only('uid')){
            $name = $request->input('uid');
            $where['uid'] = $name;
        }
        $list = Car_peizhi::where('uid','like','%'.$name.'%')->paginate(5);
        return view("admin.car_peizhi.index",["list"=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.car_peizhi.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $list = $request->only('uid','changshang','jibie','fadongji','biansuxiang','cheshenjiegou','c_k_g','zhouju','xl_rongji','zhengbeizl','pailiang','jingqixingshi','qigang','zuidamali','zuidazhouju','ranglianleixing','rangyoubiaohao','gongyoufangshi','paifangbiaozhun');
        $id = Car_peizhi::insertGetId($list);
        if($id>0){

            session()->put("ff","添加成功！");

            return redirect('admin/car_peizhi');

        }else{

            session()->put("ff","添加失败！");
            
            return redirect('admin/car_peizhi/create');

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
