<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function Companies() {
        
        return view('companies');
    }

    public function Company($id) {

        return view('company');
    }

    public function ShowCreate() {

        return view('create.company');
    }

    public function CreateCompany(Request $request) {

        return Company(1);
    }
}
