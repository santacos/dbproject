<?php namespace App\Http\Controllers;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DepartmentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($act_id)
	{
		//

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$id = $request->input('id');
		$activity = \App\Activity::findOrFail($id);
		$deps = \App\Department::all();
		//$act_id = Request::input('id');
		$recDBs = \App\Recruitment::with('activity','department')->where('act_id',$id)->get();
		return view('department.add',compact('activity','deps','recDBs'));
	}

	public function sendDepartment(){
		$deps = \App\Department::all();
		return Response::json($deps);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		/*
		$this->validate($request, [
        'name' => 'required|max:100',
        'detail' => 'required|max:1000',
        'start_date' => 'required',
        'end_date' => 'required',
        'aff_id' => 'required',
    	]);*/
		$t = "eiei";
		return $t;
		$department = new \App\Department;
		$department->name = $request->name;
		$department->default_detail = $request->default_detail;
		
		$department->save();

		// Session::flash('message', 'Successfully updated!');
		// return redirect('activity');

		return redirect()->back();
		/*
		$input = $request->input();
		return $input;*/
	}

	public function createNewDepartment() {
		
		return view('department.addNewDep');
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
