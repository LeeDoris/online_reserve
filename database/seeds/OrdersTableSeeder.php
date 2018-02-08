<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Table;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = Table::lists('id');

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Order::create([
                'table_id' => $faker->randomElement($tables)
            ]);
        }
    }
}
