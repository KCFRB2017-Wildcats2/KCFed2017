<?php

use Illuminate\Database\Seeder;

use App\City;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Kansas City',
            'state' => 'Missouri',
        ]);

        City::create([
            'name' => 'San Francisco',
            'state' => 'California',
        ]);

        City::create([
            'name' => 'Seattle',
            'state' => 'Washington',
        ]);
    }
}
