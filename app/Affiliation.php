<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model {

	//
	protected $table = 'affiliations';
	protected $primaryKey = 'aff_id';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['faculty_flag', 'name'];


	public function activitys()
    {
        return $this->hasMany('App\Activitys','aff_id');
    }

    public function users()
    {
    	return $this->belongsToMany('App\Users','affiliated','aff_id','user_id');
    }


}
