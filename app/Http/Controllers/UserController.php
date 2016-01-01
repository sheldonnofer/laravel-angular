<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller {

    public function index() {
        $users = User::all();
        return $users;
    }

    public function get($id) {
        $users = User::findOrFail($id);
        return $users;
    }

    public function store(Request $request) {
        // Validate the request...

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
    }

}
