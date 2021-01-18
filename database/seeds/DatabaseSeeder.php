<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Upload;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        $this->call(DucksSeeder::class);
        // $this->call(idkSeeder::class);
        // $this->call(idkSeeder::class);
    }
}
