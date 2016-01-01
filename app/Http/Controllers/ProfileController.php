<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller {
    
    public function index(){
        $profiles = Profile::all();
        return $profiles;
    }
    
    public function get($userId){
//        $profiles = Profile::find($userId);
        $profiles = Profile::where('userId', $userId)->first();
        return $profiles;
//        return array('name' => 'Sheldon Nofer');
    }
}
