<?php

use App\City;
use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $kc = City::where('name', 'Kansas City')->first();
        Company::create([
            'name' => 'Federal Reserve Bank of Kansas City',
            'address' => '1 Memorial Drive',
            'city_id' => $kc->id,
            'domain' => 'kc.frb.org',
            'logo' => 'https://s3.amazonaws.com/kcfrb2017/kclogo.png'
        ]);

        $sf = City::where('name', 'San Francisco')->first();
        Company::create([
            'name' => 'Google',
            'address' => '345 Spear St',
            'city_id' => $sf->id,
            'domain' => 'google.com',
            'logo' => 'https://s3.amazonaws.com/kcfrb2017/google.jpg'
        ]);
    }
}
