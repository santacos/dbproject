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
	
	public function getApplication($id) {
		if(!Auth::check()) {
			return redirect('home');
		}
		
		$user = Auth::user();
		if($user->id != $id) {
			return redirect('activity');
		}

		$applications = \App\Application::with('recruitment')->where('user_id',$user->id)->get();

		$invites = array();
		$requests = array();

		foreach ($applications as $app) {
			if($app->sender_flag == 1) {
				// Invite
				array_push($invites,$app);
			} else {
				// Request
				array_push($requests,$app);
			}
		}

		return view('user.application', compact('applications', 'requests','invites'));
	}

	public function getProfile($id) {
		$user = \App\User::find($id);
		return view('user.profile', compact('user'));
	}

	public function getAlluser(){
		$users = \App\User::all();
		return view('user.all',compact('users'));
	}

	public function getEdit($id){
		if(Auth::check()){
			$user = Auth::user();
			if($user->id==$id){
				return view('user.edit',compact('user'));
			}else{
				return redirect('activity');
			}

		}
		

	}
}
