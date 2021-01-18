<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Upload;

class DucksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 200; $i++) {
            $Upload = new Upload();
            $Upload->name =  $faker->text(20);
            $Upload->locatie = $faker->locale(10);
            $Upload->datum = $faker->dateTime();
            $Upload->image = $faker->imageUrl . '.png';
            $Upload->save();
        }
    }
}
