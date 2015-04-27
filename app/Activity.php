<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	//	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'activities';
	protected $primaryKey = 'act_id';

	protected $fillable = ['name', 'detail', 'start_date','end_date','aff_id','status'];

	public function affiliation()
    {
        return $this->belongsTo('App\Affiliation','aff_id');
    }

    public function user() {
        return $this->belongsToMany('App\User','manage_activity','act_id', 'user_id');
    }

    public function recruitments(){
    	return $this->hasMany('App\Recruitment','act_id');
    }


 

}
