<?php

namespace App;

use Auth;
use App\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Restaurant extends Model
{
    public function topiccategories()
    {
  

    	return $this->morphMany('App\TopicCategory', 'topicable');

    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('user_id', function (Builder $builder) {

            $guard = null;
           if (Auth::guard($guard)->check()) {
                
                $loggedinrole = Auth::user()->role;
                $loggedinid = Auth::user()->id;
            
                if( $loggedinrole == 'agent' ){

                    $loggedincityid = Auth::user()->city_id;

                    $loggedincityname =  City::find($loggedincityid)->name;
                    
                    $builder->where('city', '=', $loggedincityname);

                }
                if( $loggedinrole == 'user' ){ 
                    
                    $builder->where('user_id', '=', $loggedinid);

                }

            }
            

        });
    }
}
