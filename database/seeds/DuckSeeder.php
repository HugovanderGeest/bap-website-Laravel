<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Upload;

class DuckSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 200; $i++)
            $Upload = new Upload();
        $Upload->name = '' . $i;
        $Upload->locatie = 'Amsterdam';
        $Upload->datum = '';
        $Upload->image = '';
        $Upload->save();
    }
}
