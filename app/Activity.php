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

	public function affiliation()
    {
        return $this->belongsTo('App\Affiliation','aff_id');
    }

    public function user() {
        return $this->belongsToMany('App\User','manage_activity','act_id', 'user_id');
    }

    public function recruitments(){
    	return $this->hasMany('App\Recruitment','rec_id');
    }


 

}
