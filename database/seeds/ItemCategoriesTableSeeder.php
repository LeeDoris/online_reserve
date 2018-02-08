<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(107, 113) as $index)
        {
            \App\Models\ItemCategory::create([
                'name' => $faker->word
            ]);
        }
    }
}
