<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password','firstname','lastname','nickname','tel','sex','birthdate'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function redirectToProvider()
	{
	    return Socialize::with('facebook')->redirect();
	}

	public function handleProviderCallback()
	{
	    $user = Socialize::with('facebook')->user();

	    // $user->token;
	}

	public function activity()
    {
        return $this->belongsToMany('App\Activity','manage_activity','user_id','act_id');
    }

   

}
