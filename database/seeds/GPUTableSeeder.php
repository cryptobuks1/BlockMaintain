<?php

use Illuminate\Database\Seeder;

class GPUTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\GPU::truncate();

        $faker = \Faker\Factory::create();

        \App\GPU::create([
            'name' => "Nvidia 1060",
            'hashes_per_second' => $faker->numberBetween(0,100),
        ]);

        \App\GPU::create([
            'name' => "Radeon RX 570",
            'hashes_per_second' => $faker->numberBetween(0,100),
        ]);
    }
}
