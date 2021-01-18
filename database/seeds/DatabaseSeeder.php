<?php

use Illuminate\Database\Seeder;
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
        // $this->call(UsersTableSeeder::class);

        for ($i = 0; $i < 200; $i++) {
            $Upload = new Upload();
            $Upload->name = '' . $i;
            $Upload->locatie = 'Amsterdam';
            $Upload->datum = new \DateTime();
            $Upload->image = '';
            $Upload->save();
        }
    }
}
