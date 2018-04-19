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
                'symbol' => $faker->firstName,
                'name' => $faker->firstName,
                'difficulty' => 2222.3333,
                'algorithm' => $faker->word,
                'value' => $faker->numberBetween(0,100),

            ]);
        }
    }
}
