<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Hugo',
            'email'    => 'hugo@hugo.nl',
            'password' => Hash::make('12345678')
        ]);
    }
}
