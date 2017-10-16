<?php

use App\Company;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kc = Company::where('name', 'Federal Reserve Bank of Kansas City')->first();
        User::create([
            'first_name' => 'Alex',
            'last_name' => 'Todd',
            'email' => 'atodd@kc.frb.org',
            'password' => '$2y$10$vbn/pDOMhAmL95TdILlwmedbZfKoV41RBNGCU9KFtm/7uvQqfCZ7q',
            'avatar' => 'https://s3.amazonaws.com/kcfrb2017/ProfileSmall.jpg',
            'company_admin' => 1,
            'company_id' => $kc->id
        ]);
    }
}
