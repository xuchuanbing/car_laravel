<?php

namespace App\Http\Controllers\Admin\Motor_details;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Motor_details;

class Motor_detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        if($request->only('title')){
            $title = $request->input('title');
            $where['title'] = $title;

        }
        $list = Motor_details::where('title','like','%'.$title.'%')->paginate(5);
        return view("admin.motor_details.index",["list"=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.motor_details.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file("picname");
        //dd($img);
        foreach ($img as $k=>$v){
            if($img[$k]){
                    
                    $disk = \Storage::disk('qiniu'); //使用七牛云上传 
                    $file = $img[$k];

                    $ext = $file->extension();

                    if(in_array($ext,["jpeg","png","gif","jpg"])){

                        $filename =rand(1000,9999);

                        $filenames[$k] = $disk->put($filename,$img[$k]);//上传

                    }else{
                        return back()->with("文件格式不正确");
                    }
            }
        }

        //获取表单信息
        //var_dump($filenames);
        $pic = implode(",",$filenames);
        //dd($pic);
        $list = $request->only('uid','title','introduce','infomation','car_id','test_repoot');
        $list['picname']=$filenames[0];
        $list['pics'] = $pic;    
        $id = Motor_details::insertGetId($list);
        if($id>0){
            
            return redirect("admin/motor_details");

        }else{
            return back()->with("err","添加失败！！");
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
        $list = Motor_details::where("id",$id)->first();
        return view("admin.motor_details.edit",['list'=>$list]);
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
        $motor_details = new motor_details;
        $list = $request->only('picname');
        if($list['picname'] == null){

            $list = $request->only('uid','title','introduce','infomation','car_id','test_repoot');
            $id = $request->input("id");
            $id = $motor_details->where("id",$id)->update($list);
            return redirect("admin/motor_details");


        }elseif($list['picname'] !== null){

            if($request->file('picname')){

            $img = $request->file("picname");

        foreach ($img as $k=>$v){
            if($img[$k]){
                    
                    $disk = \Storage::disk('qiniu'); //使用七牛云上传 
                    $file = $img[$k];

                    $ext = $file->extension();

                    if(in_array($ext,["jpeg","png","gif","jpg"])){

                        $filename =rand(1000,9999);

                        $filenames[$k] = $disk->put($filename,$img[$k]);//上传

                    }else{
                        return back()->with("文件格式不正确");
                    }
            }
        }

        //获取表单信息

        $pic = implode(",",$filenames);
        //dd($pic);
        $list = $request->only('uid','title','introduce','infomation','test_repoot');
        $list['pics'] = $pic;  
        $list['picname'] = $filenames[0];
        //dd($list);
        $id = $request->input("id");
        $id = $motor_details->where("id",$id)->update($list);

        return redirect("admin/motor_details");
        }else{
            return back()->with("文件格式不正确");
        }

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
        Motor_details::where("id",$id)->delete();
        return back()->with("err","删除成功！");
    }
}