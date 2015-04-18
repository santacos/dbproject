<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|max:15',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6|max:15',
			'firstname' => 'required|max:20',
			'lastname' => 'required|max:30',
			'sex' => 'required',
			'tel' => 'required|numeric',
			'birthdate' => 'required',

		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'username' => $data['username'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'firstname' => $data['firstname'],
			'lastname' => $data['lastname'],
			'nickname' => $data['nickname'],
			'tel' => $data['tel'],
			'sex' => $data['sex'],
			'birthdate' => $data['birthdate'],
		]);
	}

}
