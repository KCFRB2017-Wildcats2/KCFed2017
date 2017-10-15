<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Alex',
            'last_name' => 'Todd',
            'email' => 'atodd@kansascityfed.org',
            'password' => '$2y$10$yOZ07GERMDObYHfiuMc.JuuFrQeuhJpkLRDFzRljdBwJpE4ueOt9q',
            'avatar' => 'http://local.frb.atodd.io/images/profile/59e3d54299e6a.jpg'
        ]);
    }
}
