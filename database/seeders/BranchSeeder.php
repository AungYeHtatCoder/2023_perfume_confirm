<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $brands = [
            [
                'brand_name' => 'Gucci',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'D & C',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Dior',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ], 
             [
                'brand_name' => 'MK',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],  
        ];

        // Insert the data into the 'brands' table
        DB::table('brands')->insert($brands);
    }
}