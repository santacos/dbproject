<?php namespace App\Http\Controllers;
use Auth;
use DB;
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
		$message ='';

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
		return redirect('activity')->with('message', 'create successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$activity = \App\Activity::has('affiliation')->where('act_id','=',$id)->first();

		return view('activity.show',compact('activity'));
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

}
