<?php

use Illuminate\Database\Seeder;

class CryptocurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Cryptocurrency::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            \App\Cryptocurrency::create([
                'name' => $faker->firstName,
                'type' => $faker->word,
                'value' => $faker->numberBetween(0,100),
            ]);
        }
    }
}
