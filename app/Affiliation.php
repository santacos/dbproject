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
        return $this->hasMany('App\Activitys');
    }

    // public function users()
    // {
    //     return $this->belongsToMany('App\User');
    // }

}
