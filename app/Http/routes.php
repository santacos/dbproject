<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('youractivity', 'ActivityController@yourActivity');
//Route::get('youractivity', ['middleware' => 'auth', 'ActivityController@yourActivity']);
Route::resource('activity','ActivityController', ['only'=> ['index','create','store','show','edit']]);

Route::get('dept','DepartmentController@sendDepartment');
Route::resource('adddepart','DepartmentController',['only'=> ['index','create','store','show','edit']]);

Route::controller('recruitment','RecruitmentController');

Route::controller('user','UserController');
