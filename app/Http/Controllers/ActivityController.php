<?php namespace App\Http\Controllers;
use Auth;
use DB;
use Session;
use Illuminate\Contracts\Auth\Authenticatable;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class ActivityController extends Controller {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$activities = \App\Activity::has('affiliation')->get();
		$message = Session::get('message');
		
		

		return view('activity.index',compact('activities','message'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		if(Auth::check()){
			$affs= \App\Affiliation::all();
			return view('activity.create',compact('affs'));
		}else{
			return view('home');
		}

		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request,Authenticatable $user)
	{
		
		$this->validate($request, [
        'name' => 'required|max:100',
        'detail' => 'required|max:1000',
        'start_date' => 'required',
        'end_date' => 'required',
        'aff_id' => 'required',
    	]);

		
		$activity = new \App\Activity;
		$activity->name = $request->name;
		$activity->detail = $request->detail;
		$activity->detail = $request->detail;
		$activity->start_date = $request->start_date;
		$activity->end_date = $request->end_date;

		$aff = \App\Affiliation::find($request->aff_id);

		$activity->affiliation()->associate($aff);
		
		$activity->save();

		$user->activity()->attach($activity->act_id);

		// Session::flash('message', 'Successfully updated!');
		// return redirect('activity');

		return redirect()->action('DepartmentController@create',['id'=> $activity->act_id]);
		//return redirect()->route('profile', [1]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$action = 2;
		$status =[];
		$activity = \App\Activity::with('affiliation','user')->where('act_id','=',$id)->first();
		$recDBs = \App\Recruitment::with('activity','department','application')->where('act_id',$id)->get();
		if(Auth::check()){
			$user = Auth::user();
			$realuser = \App\User::with('application')->where('id',$user->id)->first();
			$owners = $activity->user;
			foreach ($owners as $owner) {
				if($user->id==$owner->id)$action=1;
			}
			if($action!=1){
				$i=0;
				foreach($recDBs as $recDB){
					//$fkU = $user->application->where('rec_id',$recDB->rec_id);
					if( $realuser->application->where('rec_id',$recDB->rec_id)->count()==0){
						//$status[$i] = 3;
						$status = array_add($status,$i,3);
					}else{
						$cat= $realuser->application->where('rec_id',$recDB->rec_id)->first()->status;
						$status = array_add($status,$i,$cat);

					}
					$i++;
				}
				//return count($recDBs);
				//return $status;
			}


		}else{
			$action=5;

		}
		
		return view('activity.show',compact('activity','recDBs','action','status'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		return 'edit this activity page';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function yourActivity(){
		if(Auth::check()){
		$user = Auth::user();
		$activities = \App\User::find($user->id)->activity;
		return view('activity.youractivity',compact('activities','user'));





		}else{
			Session::flash('message', 'Please log in!');
			return redirect('activity');

		}
		
	}
}
