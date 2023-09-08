<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all users and brands
        $users = User::all();
        $brands = Brand::all();

        for ($i = 0; $i < 100; $i++) {
            // Randomly select a user and brand
            $user = $users->random();
            $brand = $brands->random();

            // Create a product
            Product::create([
                'name' => $faker->word,
                'image' => 'product_image.jpg', // You can adjust this as needed
                'brand_id' => $brand->id,
                'description' => $faker->paragraph,
                'published' => $faker->boolean,
                'feature' => $faker->boolean ? 1 : 0,
                'popular' => $faker->boolean ? 1 : 0,
                'user_id' => $user->id,
            ]);
        }
    }

}