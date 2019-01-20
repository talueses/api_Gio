<?php

use App\Companies;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Companies::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Companies::create([
                'name' => $faker->sentence,
                'address' => $faker->paragraph,
                'register' => $faker->sentence,
                'register' => $faker->sentence,
            ]);
        }
    }
}
