<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Loop through each product ID from 1 to 100
        for ($productId = 1; $productId <= 100; $productId++) {
            
            // Loop through each size ID from 1 to 2
            for ($sizeId = 1; $sizeId <= 2; $sizeId++) {
                
                $normal_price = rand(1000, 5000);  // Generate a random normal_price
                $discount_price = rand(500, $normal_price);  // Generate a random discount_price
                $qty = rand(0, 100);  // Generate a random qty
                
                DB::table('product_size')->insert([
                    'product_id' => $productId,
                    'size_id' => $sizeId,
                    'normal_price' => $normal_price,
                    'discount_price' => $discount_price,
                    'qty' => $qty,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}