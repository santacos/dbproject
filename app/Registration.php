<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model {

	//
	protected $table = 'registration';
	protected $primaryKey = 'reg_id';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id','rec_id'];


	public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function recruitment()
    {
        return $this->belongsTo('App\Recruitment','rec_id');
    }

   


}
