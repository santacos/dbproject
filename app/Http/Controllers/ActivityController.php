<?php namespace App\Http\Controllers;
use Auth;
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
		//
		$activities = \App\Activity::has('affiliation')->get();
		foreach ($activities as $act) {
			$act->aff_name = \App\Affiliation::find($act->aff_id)->name;
		}

		return view('activity.index',compact('activities'));
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
	public function store(Request $request)
	{
		//
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
		
		//return view('activity.index');
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
