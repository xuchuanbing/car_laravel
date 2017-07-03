<?php

namespace App\Http\Controllers\Admin\detection;

//use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Detection;
use \App\Models;

class DetectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Detection::all();
        return view("Admin.detection.index",["list"=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.detection.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file("picture")->isValid()){
            $file = $request->file("picture");
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
        //表单验证
        // $this->validate($request, [

        //     'commodity_id' => 'required|unique:detection|commodity_id',
        //     'testing_id' => 'required|unique:detection|alpha_num',
        //     'price' => 'required|unique:detection',
        //     'hits' => 'required|unique:detection',
        // ]);

        //获取表单信息
       
        $list = $request->only('commodity_id','uid','testing_id','price','hits');

        $list['picture'] = $filename;
        $id = Detection::insertGetId($list);
        if($id>0){
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
        $list = Detection::where("id",$id)->first();
        return view("admin.detection.edit",['list'=>$list]);
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
        $detection = new Detection();

        $id = $request->only('id');
        $picname = $request->only("picture");
        // dd($picname);
        // exit;
        if($picname['picture'] !== null){

        
        if($request->file("picture")->isValid()){

            $file = $request->file("picture");
            $ext = $file->extension();
            if(in_array($ext,["jpeg","png","gif","jpg"])){
                $filename = time().rand(1000,9999).".".$ext;
                $file->move("./uploads/",$filename);
                $li = $detection->where("id",$id)->first();
                //print_r($request->path());die;
                $pic = public_path().'/uploads/'.$li->picture;
                //print_r();die;
                if(isset($pic)){
                    @unlink($pic);
                }
                $list = $request->only('commodity_id','uid','testing_id','price','hits');
                
                //print_r($list);die;
                $list['picture'] = $filename; 

                $detection->where('id',$id)->update($list);
                return redirect("admin/detection");
            }
        }


        }else{
                
                $list = $request->only('commodity_id','uid','testing_id','price','hits');

                $list['picture'] = $request->get("pic");
                
                $detection->where('id',$id)->update($list);

                return redirect("admin/detection");
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
        $li = Detection::where("id",$id)->first();
        $pic = public_path().'/uploads/'.$li->picture;
        if(isset($pic)){
            @unlink($pic);
        }
        $list = Detection::where("id",$id)->delete();
        return redirect('admin/detection');
    }
}
