<?php namespace App\Http\Controllers;
use Auth;
use DB;
use Session;
use Illuminate\Contracts\Auth\Authenticatable;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class YouractivityController extends Controller {
	public function getIndex(){

		if(Auth::check()){
			$user = Auth::user();
			$regs = \App\Registration::with('recruitment')->where('user_id',$user->id)->groupBy('rec_id')->distinct()->get();

			

			$deps = [];
			$i=0;
			foreach ($regs as $reg) {
				$dep = \App\Recruitment::with('activity','department')->where('rec_id',$reg->recruitment->rec_id)->first();
				//$act = \App\Activity::findOrFail($reg->recruitment->act_id);
				$deps = array_add($deps,$i,$dep);
				$i++;
			}

			//return $deps;
			//return $reg[0]->recruitment->act_id;
			return view('activity.join',compact('deps'));
		}else{

		}
		
	}

	public function postSearch(Request $request){
		return 'hey';

	}



}
