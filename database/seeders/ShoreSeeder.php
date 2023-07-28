<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Shore;

class ShoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 40; $i++){
            $newShore = new Shore();
            $newShore->name = $faker->name();
            $newShore->location = $faker->city();
            $newShore->number_of_umbrellas = $faker->numberBetween(10, 25);;
            $newShore->number_of_bed = $faker->numberBetween(20, 50);
            $newShore->price = strval($faker->numberBetween(25, 100));
            $newShore->opening_date = $faker->date();
            $newShore->closing_date = $faker->date();
            $newShore->has_volley_beach = $faker->boolean();
            $newShore->has_soccer_field = $faker->boolean();
            $newShore->save();
        }
    }
}
