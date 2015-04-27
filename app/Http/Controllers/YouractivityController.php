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
		return ('activity.join');
	}



}
