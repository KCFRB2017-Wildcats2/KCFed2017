<?php

namespace App\Http\Controllers;

use App\City;
use App\Company;
use Auth;
use Illuminate\Http\Request;
use Image;

class CompanyController extends Controller
{

    public function Company($id) {
        $company = Company::where('id', $id)->first();
        return view('company', compact('company'));
    }

    public function CreateCompany(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:1',
            'domain' => 'required|string|max:255',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $city = City::findOrFail($request->input('city'));

        $logo = '';
        if($request->file('logo') != ""){
          $filename = uniqid().'.jpg';
          Image::make($request->file('logo'))->encode('jpg')->save(public_path().'/images/logo/'.$filename);
          $logo = config('app.url').'/images/logo/'.$filename;
        }

        $company = Company::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'city_id' => $request->input('city'),
            'domain' => $request->input('domain'),
            'logo' => $logo
        ]);

        $user = Auth::user();
        $company->users()->save($user);


        return redirect()->action('UserController@Profile')->with('success', 'Your company has been created!');
    }
}
