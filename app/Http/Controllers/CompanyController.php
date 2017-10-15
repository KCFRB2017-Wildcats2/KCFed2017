<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{

    public function Company($id) {
        $company = Company::where('id', $id)->first();
        return view('company', compact('company'));
    }

    public function ShowCreate() {

        return view('create.company');
    }

    public function CreateCompany(Request $request) {
        $this->validate($request, [
          'name' => 'required|string|max:255',
          'address_line_1' => 'required|string|max:255',
          'address_line_2' => 'max:255',
          'address_line_3' => 'max:255',
          'description' => 'max:255',
          'website_url' => 'max:255'
        ]);
        //validate the request

        $company = new Company();
        $company->name = $request->input("name");
        $company->address_line_1 = $request->input("address_line_1");
        $company->address_line_2 = $request->input("address_line_2");
        $company->address_line_3 = $request->input("address_line_3");
        $company->description = $request->input("description");
        $company->website_url = $request->input("website_url");
        $company->city_id = 1; //todo change
        $company->save();
        return Company(1);
    }
}
