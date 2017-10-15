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
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'max:255',
            'city' => 'required|string|max:1',
            'zip' => 'required|string|max:255',
            'domain' => 'required|string|max:255',
            'website_url' => 'max:255',
            'description' => 'max:255',
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
            'address_line_1' => $request->input('address_line_1'),
            'address_line_2' => $request->input('address_line_2'),
            'city_id' => $request->input('city'),
            'zip' => $request->input('zip'),
            'domain' => $request->input('domain'),
            'website_url' => $request->input('website_url'),
            'description' => $request->input('description'),
            'logo' => $logo
        ]);

        $company->admins()->attach(Auth::user()->id);

        return redirect()->action('UserController@Profile')->with('success', 'Your company has been created!');
    }
}
