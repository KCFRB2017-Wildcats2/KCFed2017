<?php

namespace App\Http\Controllers;

use Auth; //Don't know if this is needed
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function Profile() {
        //check for if authenticated
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile', compact('user'));
        //else return error
    }

    public function UpdateProfile() {
      $user = User::where('id', Auth::user()->id)->first();
      $this->validate($request, [
        'first' => 'required|string|max:255',
        'last' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,'.$user->id,
        'avatar' => 'max:255'
      ]);

      $user->first = $request->input('first');
      $user->last = $request->input('last');
      $user->email = $request->input('email');;
      return Profile();

    }

}
