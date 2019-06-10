<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Doctor;
use App\Lawyer;
use App\Company;
use App\College;
use App\School;
use App\Hotel;
use App\Restaurant; 
use App\FitnessCenter;

use App\ShowTopicCategory;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function colleges($url ){

    	$user_code = $url;
        $categorytype = "Colleges";

        $user = College::where('collegekey','=',$url)->first(['id','collegekey AS user_code', 'name' , 'city', 'country' , 'address', 'type' ]);

        $topicable = "App\College";


        $id = $user->id;
        $name = $user->name;
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;  
        $speciality =  "";
        $type = "";
        $qualification =  "";
        $exp =  "";
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `colleges` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`collegekey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%College%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);

        return view('viewprofiledoctor', compact( 'topics' ,'id', 'user_code', 'categorytype', 'name'  , 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }

    public function companies($url ){

    	$user_code = $url;
        $categorytype = "Companies";

        $user = Company::where('companykey','=',$url)->first(['id','companykey AS user_code', 'name' , 'city', 'country' , 'address' ]);

        $topicable = "App\Company";
 

        $id = $user->id;
        $name = $user->name;
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;  
        $speciality =  "";
        $type = "";
        $qualification =  "";
        $exp =  "";
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `companies` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`companykey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%Company%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);

        return view('viewprofiledoctor', compact( 'topics' ,'id', 'user_code', 'categorytype', 'name', 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }

    public function doctors($url ){

    	$user_code = $url;
        $categorytype = "Doctors";

        $user = Doctor::where('doctorkey','=',$url)->first(['id','doctorkey AS user_code', 'name', 'city', 'country' , 'address', 'speciality', 'qualification' , 'exp']);

		$topicable = "App\Doctor";


        $id = $user->id;
        $name = $user->name;
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;
        $speciality = $user->speciality;
        $type = "";
        $qualification = $user->qualification;
        $exp = $user->exp;
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `doctors` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`doctorkey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%Doctor%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);

        return view('viewprofiledoctor', compact('topics', 'id', 'user_code', 'categorytype', 'name', 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }

    public function fitnesscenters($url ){

    	$user_code = $url;
        $categorytype = "fitnesscenters";

        $user = FitnessCenter::where('fitnesscenterkey','=',$url)->first(['id','fitnesscenterkey AS user_code', 'name', 'city', 'country' , 'address' ]);

        $topicable = "App\FitnessCenter";


        $id = $user->id;
        $name = $user->name;
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;  
        $speciality =  "";
        $type = "";
        $qualification =  "";
        $exp =  "";
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `fitness_centers` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`fitnesscenterkey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%Fitness%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);

        return view('viewprofiledoctor', compact( 'topics' ,'id', 'user_code', 'categorytype' , 'name', 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }

    public function hotels($url ){

    	$user_code = $url;
        $categorytype = "Hotels";

        $user = Hotel::where('hotelkey','=',$url)->first(['id','hotelkey AS user_code', 'name',  'city', 'country' , 'address']);

        $topicable = "App\Hotel";


        $id = $user->id;
        $name = $user->name; 
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;  
        $speciality =  "";
        $type = "";
        $qualification =  "";
        $exp =  "";
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `hotels` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`hotelkey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%Hotel%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);

        return view('viewprofiledoctor', compact( 'topics' ,'id', 'user_code', 'categorytype', 'name', 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }

    public function lawyers($url ){

    	$user_code = $url;
        $categorytype = "Lawyers";

        $user = Lawyer::where('lawyerkey','=',$url)->first(['id','lawyerkey AS user_code', 'name',  'city', 'country' , 'address']);

        $topicable = "App\Lawyer";


        $id = $user->id;
        $name = $user->name;
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;  
        $speciality =  "";
        $type = "";
        $qualification =  "";
        $exp =  "";
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `lawyers` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`lawyerkey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%Lawyer%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);

        return view('viewprofiledoctor', compact( 'topics' , 'id', 'user_code', 'categorytype', 'name', 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }

    public function restaurants($url ){

    	$user_code = $url;
        $categorytype = "Restaurants";

        $user = Restaurant::where('restaurantkey','=',$url)->first(['id','restaurantkey AS user_code', 'name',  'city', 'country' , 'address']);

            $topicable = "App\Restaurant";


        $id = $user->id;
        $name = $user->name;
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;  
        $speciality =  "";
        $type = "";
        $qualification =  "";
        $exp =  "";
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `restaurants` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`restaurantkey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%Restaurant%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);

        return view('viewprofiledoctor', compact( 'topics' ,'id', 'user_code', 'categorytype', 'name', 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }

    public function schools($url ){

    	$user_code = $url;
        $categorytype = "Schools";

        $user = School::where('schoolkey','=',$url)->first(['id','schoolkey AS user_code' , 'name',  'city', 'country' , 'address']);

        $topicable = "App\School";


        $id = $user->id;
        $name = $user->name;
        $address = $user->address;
        $city = $user->city;
        $country = $user->country;  
        $speciality =  "";
        $type = "";
        $qualification =  "";
        $exp =  "";
         
        $topic = ShowTopicCategory::where('topicable_type', '=', $topicable)->where('topicable_id', '=', $id)->first(['id']);

        if(!isset($topic)){
            
            $url = mt_rand(100000000, 999999999);
            $createtopic = ShowTopicCategory::create(
                [   
                    'user_id' => 1,
                    'topicable_type' => $topicable,
                    'topicable_id' => $id,
                    'topic_name' => "What is your review!",  
                    'type' => 'private',
                    'url' => $url,  
                    'anonymous' => 1,
                    'status' => 1,                     
                ]);

        }

        $topics = DB::select("SELECT  a.`id`,  a.`url` , a.`user_id`,  a.`topic_name`
                                    , DATE_FORMAT(a.`created_at`, '%d-%b-%Y')  created_at ,
                                    (case when (a.`anonymous` = 0) then c.`user_code` else '-1' end) as user_code,
                                    (case when (a.`anonymous` = 0) then c.`name` else '-1' end) as user_name
                                FROM `topic_categories` a ,  `schools` b, `users` c
                                        WHERE b.`id` = :id
                                        AND a.`user_id` = c.`id`
                                        AND b.`schoolkey` = :user_code
                                        AND a.`topicable_id` = b.`id` 
                                        AND a.`topicable_type` like  '%School%' 
                                        ORDER BY a.`updated_at` DESC
                                        limit 10", ['id' => $id, 'user_code' => $user_code]);


        return view('viewprofiledoctor', compact( 'topics' ,'id', 'user_code', 'categorytype', 'name', 'address' , 'city' , 'country', 'speciality', 'type','qualification' , 'exp'));

    }
}
