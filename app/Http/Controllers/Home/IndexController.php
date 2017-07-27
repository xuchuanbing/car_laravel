<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Motor_details;
use App\Models\Detection_mes;
use App\Models\Detection;
use App\Models\Car_peizhi;
use App\Models\Audi;
use App\Models\Brand;
use App\Models\Selleruser;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $li = Detection::offset(0)->limit(4)->get();
        foreach($li as $v){
            $list[] = Motor_details::all()->toArray();
            $lists[] = Detection_mes::all()->toArray();
        }
        // echo "<pre>";
        // var_dump($lists); 
        return view("/welcome",["list"=>$list,'li'=>$li,'lists'=>$lists]);
    }



    public function buyers(Request $request)
    {
        $where = [];
        if($request->only('title')){
            $title = $request->input('title');
            $where['title'] = $title;
        }
        $list = Motor_details::where('title','like','%'.$title.'%')->paginate(16);
        $lists = Detection_mes::all();
        $audi = Audi::all();
        $brand = Brand::all();
        $detection = Detection::all();
        return view('Home\buyers',["list"=>$list,"audi"=>$audi,"brand"=>$brand,"lists"=>$lists,'where'=>$where,'detection'=>$detection]);
    }


    public function details(Request $request, $id)
    {
        $hits['hits']=Redis::get('hits');
        $hits = ((int)$hits['hits']);
        if($hits == 0){
            $hits++;
            Redis::set('hits',$hits);
        }else{
            $hits++;
            Redis::set('hits',$hits);
        }

        $hits = Redis::get('hits');
        $hi['hits']=(int)$hits;
        if($hi['hits']==300){
            $dd = Detection::where("id",$id)->first();//->update($hi);
            $hi['hits'] = $dd->hits;
            $hi['hits'] += 300;
            Detection::where("id",$id)->update($hi);
            Redis::set('hits',0);
        }


        $li_1 = Car_peizhi::all();
        $li = Car_peizhi::where('uid',$id)->first();
        $list_1 = Detection_mes::all();

        $lis = Detection::where("id",$id)->first();

        $list = Detection_mes::where("uid",$id)->first();
        $lists = Motor_details::where("uid",$id)->first();
        $car = $lists->pics;
        $car = explode(",", $car);
        $lists_1 = Motor_details::offset(0)->limit(4)->get();
        return view('Home\details',["li_1"=>$li_1,"li"=>$li,"lis"=>$lis,"list"=>$list,"lists"=>$lists,"list_1"=>$list_1,"lists_1"=>$lists_1,"car"=>$car]);
    }

    public function sellers(Request $request)
    {
        $li['IP'] = $_SERVER['REMOTE_ADDR'];
        $phone = $request->all();
        $li['sellerphone'] = $phone["phone"];
        Selleruser::insertGetId($li);

    }

    public function userstore()
    {

        return view('Home\userstore');

    }

     public function fuwubozhang()
    {
        return view('Home\fuwubozhang');

    }

      public function fenqi()
    {
        return view('Home/fenqi');

    }

    

     public function guyuwomeng()
    {
        return view('Home/guyuwomeng');

    }

     public function jaru()
    {
        return view('Home/jaru');

    }

     public function pinggushi()
    {
        return view('Home/pinggushi');

    }

     public function seller()
    {
        return view('Home/seller');

    }

     public function shouye()
    {
        return view('Home/shouye');

    }

     public function wenda1()
    {
        return view('Home/wenda1');

    }

     public function wenda2()
    {
        return view('Home/wenda2');

    }

     public function wenda3()
    {
        return view('Home/wenda3');

    }

}