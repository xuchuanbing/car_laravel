<?php

namespace App\Http\Controllers\Admin\Detection_mes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detection_mes;


class Detection_mesController extends Controller
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

        $uid = $request->input('uid');
        $where['uid'] = $uid;

            }
        $list = Detection_mes::where('uid','like','%'.$uid.'%')->paginate(5);
        return view("admin.detection_mes.index",["list"=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.detection_mes.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->session());
        $list = $request->only('uid','price','service_price','licensing','mileage','transmission','emission','address');
        $id = Detection_mes::insertGetId($list);
        if($id>0){

            session()->put("ff","添加成功！");

            return redirect('admin/detection_mes');

        }else{

            session()->put("ff","添加失败！");
            
            return redirect('admin/detection_mes/create');

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
        $list = Detection_mes::where("id",$id)->first();
        return view("admin.detection_mes.edit",['list'=>$list]);
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
        $detection_mes = new Detection_mes;
        $id = $request->input('id');
        $list = $request->only('uid','price','service_price','licensing','mileage','transmission','emission','address');

        $id = $detection_mes->where('id',$id)->update($list);

        if($id>0){

            session()->put("ff","修改成功！");
            
            return redirect('admin/detection_mes');

        }else{
            session()->put("ff","修改失败！");
            
            return redirect('admin/detection_mes/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detection_mes = new Detection_mes;
        $detection_mes->where('id',$id)->delete();
        session()->put("ff","删除成功！");
        return redirect('admin/detection_mes');
    }
}
