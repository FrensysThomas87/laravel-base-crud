<?php

use Illuminate\Database\Seeder;
use App\Beer;
use Faker\Generator as Faker;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $beer = new Beer();
            $beer->brand = $faker->name();
            $beer->price = rand(1,100);
            $beer->liters = rand(1,2);
            $beer->nationality = $faker->name();
            $beer->beer_typology = $faker->name();
            $beer->image = 'dfdfgfdgf';
            $beer->description = $faker->name();
            $beer->save();
        }
    }
}
