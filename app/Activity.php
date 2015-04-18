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


}
