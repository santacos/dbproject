<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	//
	protected $table = 'students';
	protected $primaryKey = 'user_id';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['year','description','user_id'];


	public function user()
    {
        return $this->belongsTo('App\User','id','user_id');
    }
   


}
