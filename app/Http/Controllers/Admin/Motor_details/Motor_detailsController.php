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
        $list = Motor_details::paginate(2);

        return view("Admin.motor_details.index",["list"=>$list]);
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
        if($request->file("picname")->isValid()){
            $file = $request->file("picname");
            $ext = $file->extension();
            if(in_array($ext,["jpeg","png","gif","jpg"])){
                $filename = time().rand(1000,9999).".".$ext;
               // $img = Image::make($filename)->resize(300, 200);
                //$file->move("./uploads/","s_".$img);
                $file->move("./uploads/",$filename);
            }else{
                return back()->with("文件格式不正确");
            }

        }

        //获取表单信息
       
        $list = $request->only('title','price','save_price','introduce','infomation','test_repoot','parameter','source');

        $list['picname'] = $filename;
        $id = Motor_details::insertGetId($list);
        if($id>0){
            return redirect("admin/motor_details");
            return back()->with("err","添加成功！！");

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
            $list = $request->only('title','price','save_price','introduce','infomation','test_repoot','parameter','source');
            $id = $request->input("id");
            $id = $motor_details->where("id",$id)->update($list);
            return redirect("admin/motor_details");

        }elseif($list['picname'] !== null){

            if($request->file('picname')->isValid()){

                $file = $request->file('picname');
                $ext = $file->extension();
                if(in_array($ext,["jpeg","png","gif","jpg"])){
                $filename = time().rand(1000,9999).".".$ext;
               // $img = Image::make($filename)->resize(300, 200);
                //$file->move("./uploads/","s_".$img);
                $file->move("./uploads/",$filename);
                $id = $request->input("id");
                $li = $motor_details->where("id",$id)->first();
                
                $pic = public_path().'\uploads\\'.$li->picname;
                if(isset($pic)){
                    @unlink($pic);
                }
                
                $list = $request->only('title','price','save_price','introduce','infomation','test_repoot','parameter','source');
                $list['picname'] = $filename;
                //print_r($list['picname']);die;
                $id = $motor_details->where("id",$id)->update($list);
                return redirect("admin/motor_details");
                }else{
                    return back()->with("文件格式不正确");
                }

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
        $li = Motor_details::where("id",$id)->first();
        $pic = public_path().'/uploads/'.$li->picture;
        if(isset($pic)){
            @unlink($pic);
        }
        Motor_details::where("id",$id)->delete();
        return back()->with("err","删除成功！");
    }
}