<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function Company($id) {
        $event = Event::where('id', $id)->first();
        return view('company');
    }

    public function ShowCreate() {

        return view('create.company');
    }

    public function CreateCompany(Request $request) {
        //$companies = Company::where('id', $id)->first();
        $company = new Company();
        $company->name = $request->input("name");
        $company->address_line_1 = $request->input("address_line_1");
        $company->address_line_2 = $request->input("address_line_2");
        $company->address_line_3 = $request->input("address_line_3");
        $company->description = $request->input("description");
        $company->website_url = $request->input("website_url");
        $company->save();
        return Company(1);
    }
}
