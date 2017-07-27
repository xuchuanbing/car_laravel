<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;
use Illuminate\Support\Facades\Redis;
use App\Models\User;

class MycodeController extends Controller
{
     public function __construct(Sms $sms)
    {
       $this->sms=$sms;
    }
    public function code(Request $request){
        $input = $request->all();
        $phone = $input['phone_']; // 用户手机号，接收验证码
    	$name = "兄弟连";
    	$num = rand(100000,999999);
    	$smsParams = [
    		'number' => "$num"
    	];

    	$content = json_encode($smsParams);
    	$code = "SMS_75835101";
    	$result=$this->sms->send($phone,$name,$content,$code);
        Redis::sEtex($phone,60*2,$num);
    }

    public function doCode(Request $request){

        $input = $request->all();
        $phone = $input['phone_'];
        $li["phone"] = $phone;
        $li["IP"] = $_SERVER["REMOTE_ADDR"];
        $code = Redis::get($phone);

        $code1 = $input['code_'];
        
        $list = User::where("phone",$phone)->first();
            
        if($code==$code1){

            if(!empty($list->phone)){
                session()->put("phone1",$phone);
                $aa = mb_substr($phone,0,3);
                $bb = mb_substr($phone,7,10);
                $phone = $aa."...".$bb;
                session()->put("phone",$phone);

            }else{
                session()->put("phone1",$phone);
                $aa = mb_substr($phone,0,3);
                $bb = mb_substr($phone,7,10);
                $phone = $aa."...".$bb;
                $id = User::insertGetId($li);
                session()->put("phone",$phone);
                
            }           

        }else{

            return "验证输入不正确！";
            
        }

    }

    public function out(Request $request){
        if(session()->has('phone')){
            $request->session()->forget('phone');
            $request->session()->forget('phone1');
            return redirect("/");
        }
    }

    
}
