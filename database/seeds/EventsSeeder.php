<?php

use App\Company;
use App\Event;
use App\User;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kc = Company::where('name', 'Federal Reserve Bank of Kansas City')->first();
        $user = User::where('first_name', 'Alex')->first();
        Event::create([
            'name' => 'KC FRB Code-A-thon',
            'start_date' => '2017-10-13 18:00:00',
            'end_date' => '2017-10-15 22:59:59',
            'private' => 0,
            'description' => 'Test your coding skills and make a cool web app over the weekend!',
            'created_by' => $user->id,
            'company_id' => $kc->id,
            'image' => 'https://s3.amazonaws.com/kcfrb2017/image001.jpg'
        ]);
    }
}
