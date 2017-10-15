<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;
use Storage;

use App\User;

class UserController extends Controller
{
    public function Profile() {
        $user = User::with('company')->where('id', Auth::user()->id)->first();
        return view('profile', compact('user'));
    }

    public function UpdateProfile(Request $request) {
      $this->validate($request, [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,'.Auth::user()->id,
        'avatar' => 'image|mimes:jpeg,png,jpg|max:2048'
      ]);

      $user = User::where('id', Auth::user()->id)->first();
      $avatar = $user->avatar;
      if($request->file('avatar') != ""){
        $filename = uniqid().'.jpg';
        Image::make($request->file('avatar'))->encode('jpg')->save(public_path().'/images/profile/'.$filename);
        $avatar = config('app.url').'/images/profile/'.$filename;
      }

      $user->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'avatar' => $avatar
      ]);

      return redirect()->action('UserController@Profile')->with('success', 'Your profile has been updated!');
    }
}
