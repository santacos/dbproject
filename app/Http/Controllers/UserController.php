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
	public function getAlluser(){
		$users = \App\User::all();
		return view('user.all',compact('users'));
	}
}