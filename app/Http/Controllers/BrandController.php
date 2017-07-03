<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buyers;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //实例化stu表操作对象
        $db = \DB::table('brand');
        
        //判断并执行搜索和封装搜索条件
        $where = [];
        if ($request->has('id')) {
           $id = $request->input("id");
           $db->where("id","like","%{$id}%"); 
           $where['id']=$id;
        }
        /* if ($request->has('sex')) {
           $sex = $request->input("sex");
           $db->where("sex","=",$sex); 
           $where['sex']=$sex;
        } */
        
        //执行分页信息查询
        $list = $db->paginate(5); //常规分页
        //$list = DB::table('stu')->simplePaginate(5); //简单分页
        
        //加载模板并放置信息
        return view("Admin.brand.brand",['list'=>$list,'where'=>$where]);
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
