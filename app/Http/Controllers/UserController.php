<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;
use Storage;

class UserController extends Controller
{
    public function Profile() {
        $user = User::with('company')->where('id', Auth::user()->id)->first();
        $cities = City::get();
        $domain = explode('@', $user->email)[1];
        return view('profile', compact('user', 'cities', 'domain'));
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
        $filename = uniqid().'.'.$request->file('avatar')->getClientOriginalName();
        Image::make($request->file('avatar'))->save(public_path().'/images/profile/'.$filename);
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
