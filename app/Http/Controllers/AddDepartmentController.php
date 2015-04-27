<?php namespace App\Http\Controllers;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class AddDepartmentController extends Controller {

	public function create(Request $request)
	{
		return view('department.addNewDep');
	}

	public function store(Request $request)
	{
		/*
		// Using laravel method
		$department = new \App\Department;
		$department->name = $request->name;
		$department->default_detail = $request->default_detail;
		$department->save();
		*/
		// Using SQL statement
		$sql = 'INSERT INTO departments (name, default_detail) VALUES (\''.$request->name.'\',\''.$request->default_detail.'\')';
		//return $sql;
		DB::unprepared($sql);

		return redirect()->back();
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
