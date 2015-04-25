<?php namespace App\Http\Controllers;
use Auth;
use DB;
use Session;
use Illuminate\Contracts\Auth\Authenticatable;

use Response;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class RecruitmentController extends Controller {

	public function getAllrec(Request $request){
		$act_id = Request::input('id');
		$recruitments = \App\Recruitment::with('activity','department')->where('act_id',$act_id)->get();
		foreach($recruitments as $rec){
			$rec->name = $rec->department->name;
			$rec->detail = $rec->edited_dep_detail;
		}
		return Response::json($recruitments);
	}

	public function getAlloption(Request $request){
		$act_id = Request::input('id');
		$recruitments = \App\Recruitment::with('activity','department')->where('act_id',$act_id)->get();
		$dep =[];
		$i=0;
		foreach ($recruitments as $rec) {
			$dep = array_add($dep,$i,$rec->dep_id);
			$i=$i+1;
		}
		$dep = array_flatten($dep);
		$department = DB::table('departments')->whereNotIn('dep_id', $dep)->get();

		return Response::json($department);
	}

	public function postRecruit(Request $request){
		$inputs = Request::input('array');
		$size = Request::input('size');
		$act_id = Request::input('act_id');
		for($i=0;$i<$size;$i++){
			\App\Recruitment::create([
				'edited_dep_detail' => $inputs[$i]['detail'],
				'min_num'=>$inputs[$i]['min_num'],
				'current_num'=>0,
				'max_num'=>$inputs[$i]['max_num'],
				'dep_id'=>$inputs[$i]['dep_id'],
				'act_id'=>$act_id
			]);
		}
		return Response::json(array('msg'=>'success'));
	}

	public function getAddmember(Request $request,Authenticatable $user){
		if(Auth::check()){
			$rec_id = Request::input('id');
			$apps = DB::table('application')->where('rec_id',$rec_id)->get();
			$cur_user = $user;
			//not current user
			$users = DB::table('users')->where('id','<>',$cur_user->id)->get();
			//return $apps;
			return view('recruitment.manage',compact('users','cur_user','rec_id'));
			//$appuser = $user->application();
			//return $appuser;
		}else{
			return view('home');
		}

	}

	public function getInvite(Request $request){
		$rec_id = Request::input('id');
		$mem_id = Request::input('mid');

		$user = \App\User::find($mem_id);



		//return 'rec='.$rec_id.' mem_id='.$mem_id;
		return view('recruitment.invite',compact('rec_id','mem_id','user'));
		//return $user;
	}

	public function postInvite(Request $request,Authenticatable $user){
		$rec_id = Request::input('id');
		$mem_id = Request::input('mid');

		

		$application = new \App\Application;
		$application->message = Request::input('message');
		$application->sender_flag=true;
		$application->status=1;
		$application->user_id=$mem_id;
		$application->rec_id=$rec_id;
		$application->save();
		
		// $application = $user->applicaton()->save($application);
		// $application = $recruitment->applicaton()->save($application);

		return redirect('recruitment/addmember?id='.$rec_id);
	}
}
