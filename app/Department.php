<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	//
	protected $table = 'departments';
	protected $primaryKey = 'dep_id';

	public function recruitments()
    {
        return $this->hasMany('App\Recruitment','rec_id');
    }

}
