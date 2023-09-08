<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin\Order;
use Faker\Factory as Faker;
use App\Models\Admin\Product;
use Illuminate\Database\Seeder;
use App\Models\Admin\OrderProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all users and products
        $users = User::all();
        $products = Product::all();

        foreach ($users as $user) {
            for ($i = 0; $i < 100; $i++) {
                // Create an order for the user
                $order = Order::create([
                    'user_id' => $user->id,
                    'sub_total' => $faker->numberBetween(50, 500),
                    'payment_method' => $faker->randomElement(['Credit Card', 'PayPal', 'Cash']),
                    'order_note' => $faker->sentence(),
                    'status' => $faker->randomElement(['pending', 'completed', 'delivered']),
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
                ]);

                // Attach random products to the order using the sync method
                $order->products()->sync([
                    $products->random()->id => [
                        'size_id' => $faker->numberBetween(1, 2),
                        'qty' => $faker->numberBetween(1, 10),
                        'total_price' => $faker->numberBetween(50, 500),
                    ],
                    // Add more products as needed
                ]);
            }
        }
    }
}