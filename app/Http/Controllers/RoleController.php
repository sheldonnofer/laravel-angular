<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller {

    public function index() {
        $roles = Role::all();
        return $roles;
    }

    public function get($id) {
        $roles = Role::findOrFail($id);
        return $roles;
    }

//    public function store(Request $request) {
//        // Validate the request...
//
//        $role = new Role;
//
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = $request->password;
//
//        $user->save();
//    }

}
