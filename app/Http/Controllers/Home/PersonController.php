<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detection;
use App\Models\Motor_details;
use App\Models\Detection_mes;
use App\Models\Buyers;

class PersonController extends Controller
{
	    public function index(Request $request)
	{
		$li['phone'] = session("phone1");
		$uid = $request->all();
		$li['uid']=$uid['uid'];
		$list = Buyers::where("uid",$uid)->first();
		if($list!=null){
			$phone = $list->phone;
			if($phone!=$li['phone']){
			$id = Buyers::insertGetId($li);
			}else{
				return "1";
			}
		}else{
			Buyers::insertGetId($li);
		}
		



	}
	
	public function userstore()
	{
		$buyers = Buyers::all();
		foreach ($buyers as $k => $v) {
			$detection[] = Detection::where("id",$v->uid)->first();
			$motor_details[] = Motor_details::where("uid",$v->uid)->first();
			$detection_mes[] = Detection_mes::where("uid",$v->uid)->first();
		}
		//dd($motor_details);
		return view('home.person.userstore',['buyers'=>$buyers,'detection'=>$detection,'motor_details'=>$motor_details,'detection_mes'=>$detection_mes]);
	}
	
	public function userhistory()
	{

	}

	public function collection(Request $request,$id)
	{
	    $detection = new Detection();
		$info = $detection->where('id',$id)->first()->toArray();
		//dd($dd);
		  if($info['collectionvehicle'] == null){
			  
		      $info['collectionvehicle'] = 1;
			  //dd($info);
		      $dd = $detection->where("id",$id)->update($info); 
			  //dd($dd);
			  return response()->json($info);
		}else{																																																																			
			$info['collectionvehicle'] = null;
			$detection->where("id",$id)->update($info); 
		    //return response()->json(null);
		} 
		

	}
	
	
	public function pricereminder(Request $request,$id)
	{
		if($request->pricereminder == null){
			$list['pricereminder'] = 1;
			$dd =\DB::table('detection')->where("id",$id)->update($list);	
		} 
	}
	
	
	public function pricereminderdel(Request $request,$id)
	{
		if($request->pricereminder !== null){
			$list['pricereminder'] = null;
			$dd =\DB::table('detection')->where("id",$id)->update($list);	
		}
        return redirect('home/person');		
	}
	
	
	public function userhistorydel(Request $request,$id)
	{
	     $detection = new Detection();
		 $info = $detection->where('id',$id)->first()->toArray();
		 //dd($info['hstatus']);
	    if($info['hstatus'] !== null){
			$info['hstatus'] = null;
			//dd($info['hstatus']);
			$dd =\DB::table('detection')->where("id",$id)->update($info);	
		}
		return redirect('home/person/userhistory');	
	}
	
	public function userstoredel(Request $request,$id)
	{
		$detection = new Detection();
		 $info = $detection->where('id',$id)->first()->toArray();
		 //dd($info['hstatus']);
	    if($info['collectionvehicle'] !== null){
			$info['collectionvehicle'] = null;
			//dd($info['hstatus']);
			$dd =\DB::table('detection')->where("id",$id)->update($info);	
		}
		return redirect('home/person/userstore');	
	}
}
