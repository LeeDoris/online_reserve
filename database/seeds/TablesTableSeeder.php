<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Table;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 20) as $index)
        {
            Table::create([
                'number' => $index,
                'seats' => $faker->randomElement([2,4,8]),
                'position' => $faker->sentence(1),
                'description' => $faker->text(200),
                'available' => rand(0,1),
                'image_url' => $faker->imageUrl($width = 640, $height = 480)
            ]);
        }
    }
}
