<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemsOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $items = \APP\Models\Item::lists('id');
        $orders = \APP\Models\Order::lists('id');

        foreach($orders as $order)
        {
            $itemsUsed = [];
            foreach (range(1,$faker->numberBetween(1,10)) as $index) {
                $itemId = $items[$index];
                if( !in_array($itemId, $itemsUsed) )
                    \APP\Models\ItemOrder::create([
                        'order_id' => $order,
                        'item_id' => $itemId,
                        'quantity' => $faker->numberBetween(0,5)
                    ]);
                $itemsUsed[] = $itemId;
            }

        }
    }
}
