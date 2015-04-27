<?php namespace App\Http\Controllers;
use Auth;
use DB;
use Session;
use Illuminate\Contracts\Auth\Authenticatable;

use Response;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class UserController extends Controller {
	
	public function getAllapp() {
		if(!Auth::check()) {
			return redirect('home');
		}
		
		$user = Auth::user();
		$applications = \App\Application::with('recruitment.activity','recruitment.department')->where('user_id',$user->id);

		$aa = $applications->where('sender_flag',true)->where('status',2)->get();
		$requestapps =$applications->where('sender_flag',false)->get();
		// return $requestapps;
		// return $inviteapps;
		// return $applications;
		// //$books = Book::with('author.contacts')->get();
		return view('user.application',compact('requestapps','aa'));
	}

	public function getProfile($id) {
		$user = \App\User::find($id);
		$student = \App\Student::find($id);

		//find activity
		$regs = \App\Registration::with('recruitment')->where('user_id',$user->id)->groupBy('rec_id')->distinct()->get();
		$deps = [];
		$i=0;
		foreach ($regs as $reg) {
			$dep = \App\Recruitment::with('activity','department')->where('rec_id',$reg->recruitment->rec_id)->first();
			//$act = \App\Activity::findOrFail($reg->recruitment->act_id);
			$deps = array_add($deps,$i,$dep);
			$i++;
		}


		return view('user.profile', compact('user','student','deps'));
	}

	public function getAlluser(){
		$users = \App\User::all();
		return view('user.all',compact('users'));
	}

	public function getEdit($id){
		if(Auth::check()){
			$user = Auth::user();
			$student = \App\Student::find($user->id);
			if(is_null($student))$description='';
			else $description=$student->description;

			if($user->id==$id){
				return view('user.edit',compact('user','description'));
			}else{
				return redirect('activity');
			}

		}
	}

	public function postEdit($id){
		return Request::all();

	}
}
