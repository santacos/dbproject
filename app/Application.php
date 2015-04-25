<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

	//
	protected $table = 'application';
	protected $primaryKey = 'app_id';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['message', 'status','sender_flag','user_id','rec_id'];


	public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function recruitment()
    {
        return $this->belongsTo('App\Recruitment','rec_id');
    }

   


}
