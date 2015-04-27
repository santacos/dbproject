<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model {

	//
	protected $table = 'recruitment';
	protected $primaryKey = 'rec_id';
    protected $fillable = ['act_id', 'dep_id', 'edited_dep_detail','min_num','current_num','max_num'];

	public function department()
    {
        return $this->belongsTo('App\Department','dep_id');
    }

    public function activity(){
    	return $this->belongsTo('App\Activity','act_id');
    }

    public function application(){
        return $this->hasMany('App\Application','rec_id');
    }

    public function registration(){
        return $this->hasMany('App\Registration','rec_id');
    }


}
