<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Profile() {
        
        return view('profile');
    }

    public function UpdateProfile() {

        return Profile();
    }

}
