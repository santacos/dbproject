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
			$userinrec =DB::table('application')->where('rec_id',$rec_id)->get(array('user_id'));
			$cur_user = $user;
			$inmem=[$cur_user->id];
			$i=1;
			foreach ($userinrec as $uin) {
				$inmem = array_add($inmem,$i,$uin->user_id);
				$i=$i+1;
			}




			$inapps = \App\Application::with('user','recruitment')->orderBy('updated_at', 'desc')->where('rec_id',$rec_id)->where('status',1)->get();
			$sendapps = \App\Application::with('user','recruitment')->orderBy('created_at', 'desc')->where('rec_id',$rec_id)->where('sender_flag',true)->get();
			$requestapps = \App\Application::with('user','recruitment')->orderBy('created_at', 'desc')->where('rec_id',$rec_id)->where('sender_flag',false)->where('status',2)->get();
			
			//not current user
			$newusers = DB::table('users')->where('id','<>',$cur_user->id)->whereNotIn('id', $inmem)->get();
			//return $inmem;
			return view('recruitment.manage',compact('newusers','cur_user','rec_id','sendapps','requestapps','inapps'));
			
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
		$application->status=2;
		$application->user_id=$mem_id;
		$application->rec_id=$rec_id;
		$application->save();
		
		// $application = $user->applicaton()->save($application);
		// $application = $recruitment->applicaton()->save($application);

		return redirect('recruitment/addmember?id='.$rec_id);
	}

	public function getAccept(Request $request){
		$app_id = Request::input('id');
		$status = Request::input('st');

		$application = \App\Application::with('recruitment')->where('app_id',$app_id)->first();
		$application->status = $status;
		$application->save();
		$rec_id = $application->recruitment->rec_id;

		//save to registration

		$registration = new \App\Registration;
		$registration->user_id = $application->user_id;
		$registration->rec_id = $application->rec_id;
		$registration->save();

		return redirect('recruitment/addmember?id='.$rec_id);
	}
}
