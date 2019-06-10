<?php

namespace App\Policies;

use Auth;
use App\User;
use App\Template;

use Illuminate\Auth\Access\HandlesAuthorization;

class TemplatePolicy
{
    use HandlesAuthorization;
 
    public function __construct()
    {
        //
    }

    public function view(User $user, Template $template)
    {
 
        return 1 === 1;
 
    } 
    
    public function create(User $user)
    {
        
        $loggedinrole = Auth::user()->role;
        
        if ( $loggedinrole == 'super' ) {

            return 1 == 1;

        }else{

            return 1 == 2;

        }

    }
 
    public function update(User $user, Template $template)
    {
        $loggedinrole = Auth::user()->role;
        
        if ( $loggedinrole == 'super' ) {

            return 1 == 1;

        }else{

            return 1 == 2;

        }
    }
 
    public function delete(User $user, Template $template)
    {
        $loggedinrole = Auth::user()->role;
        
        if ( $loggedinrole == 'super' ) {

            return 1 == 1;

        }else{

            return 1 == 2;

        }
    }
 
    public function restore(User $user, Template $template)
    {
        //
    }
 
    public function forceDelete(User $user, Template $template)
    {
        //
    }

    public function viewAny(User $user )
    { 

        $loggedinid = Auth::user()->id;

        $loggedinrole = Auth::user()->role;
        $loggedintopicable_type = Auth::user()->topicable_type;
        $loggedincatsel_status = Auth::user()->catsel_status;
        
        if ( $loggedinrole == 'super' ) {

            return 1 === 1;

        }elseif( $loggedincatsel_status == 0 || $loggedinrole == 'agent'  ){

            return 1 === 2;

        }elseif( $loggedintopicable_type == 'App\Company'  || $loggedintopicable_type == 'App\School'){

            return 1 === 2;

        }else
        {
 
                return 1 === 1;
            
        }
 

    } 
}
