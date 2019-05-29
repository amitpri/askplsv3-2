<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ShowTopicCompany extends Model
{
    protected $table = 'topic_companies';

    public function user()
    {

    	return $this->belongsTo('App\User');

    }

    public function getCreatedAtAttribute($value){

		return date('d-M-Y',strtotime($value));
	}
}
