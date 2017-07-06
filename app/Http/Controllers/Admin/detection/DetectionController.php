<?php

namespace App\Http\Controllers\Admin\Detection;

//use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detection;




class DetectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        if($request->only('commodity_id')){
            $name = $request->input('commodity_id');
            $where['commodity_id'] = $name;
        }
        $list = Detection::where('commodity_id','like','%'.$name.'%')->paginate(2);
        return view("Admin.detection.index",["list"=>$list,'where'=>$where]);
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
        if($request->file('picture')){

            $disk = \Storage::disk('qiniu'); //使用七牛云上传  

            $file = $request->file('picture');

            $ext = $file->extension();

            if(in_array($ext,["jpeg","png","gif","jpg"])){

                $filename = rand(10000,99999);

                $filenames = $disk->put($filename,$request->file('picture'));//上传
  
            }

            $img_url = $filenames;   //获取下载链接 

            $list = $request->only('commodity_id','uid','testing_id','price','hits');

        // //表单验证
        
        //  $this->validate($request, [

        //      'commodity_id' => 'required|unique:detection|numeric|commodity_id',
        //      'testing_id' => 'required|unique:detection|alpha_num',
        //      'price' => 'required|unique:detection',
        //      'hits' => 'required|unique:detection',
        //  ]);

        //   if ($v->fails()){

        //         return redirect()->back()->withErrors($v->errors());

        //     }

            $list['picture'] = $img_url;

            $id = Detection::insertGetId($list);

            if($id>0){

                return redirect("admin/detection");

            }else{

                return back()->width("msg","添加失败");
            }

        }else{

            return back()->with("msg","没有图片被上传！");

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

        
        if($request->file("picture")){

            $disk = \Storage::disk('qiniu'); //使用七牛云上传 
            
            $file = $request->file("picture");

            $ext = $file->extension();

            if(in_array($ext,["jpeg","png","gif","jpg"])){

                $filename = time().rand(1000,9999).".".$ext;

                $filenames = $disk->put($filename,$request->file('picture'));//上传

                $list = $request->only('commodity_id','uid','testing_id','price','hits');
                
                //print_r($list);die;
                $list['picture'] = $filenames; 

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
        Detection::where("id",$id)->delete();
        return back()->with("err","删除成功！");
    }
}
