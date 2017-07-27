<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use \App\Models\Audi;
use App\Http\Controllers\Controller;

class AudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //实例化stu表操作对象
        $db = \DB::table('audi');
		//print_r($db);
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
        $list = $db->paginate(10); //常规分页
		//return $list;
        //$list = DB::table('stu')->simplePaginate(5); //简单分页
        
        //加载模板并放置信息
        return view("Admin.audi.index",['list'=>$list,'where'=>$where]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.audi.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //获取表单信息
       
        $list = $request->only('id','brand_name');
        //dump($list);die;
        //$list['picture'] = $filename;
        if(($list['brand_name']!==null)){
			audi::insertGetId($list);
			return redirect("admin/audi");
		}else{
			return redirect("Admin/audi/create");
		}
		//return $id;
        
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
        $list = Audi::where("id",$id)->first();
		//print_r($list);die;
        return view("Admin.audi.edit",['list'=>$list]);
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
        $list = $request->only(['brand_name']);
		//print_r($input);die;
        $id = Audi::where("id",$id)->update($list);
        if($id>0){
            echo "修改成功!";
			 return redirect('Admin/audi');
        }else{
            echo "修改失败!";
        }
    }

    /**
     * Remove the specified resource from strage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Audi::find($id)->delete();
		 return redirect('Admin/audi');
    }
}
