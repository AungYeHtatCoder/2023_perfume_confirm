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
<<<<<<< HEAD
                'brand_name' => 'Gucci',
=======
                'brand_name' => 'GUCCI',
>>>>>>> f80f407cda64a4c1e7968781b71004b929be30b3
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
<<<<<<< HEAD
                'brand_name' => 'D & C',
=======
                'brand_name' => 'VICTORIA SECRET',
>>>>>>> f80f407cda64a4c1e7968781b71004b929be30b3
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
<<<<<<< HEAD
                'brand_name' => 'Dior',
=======
                'brand_name' => 'CHANNEL',
>>>>>>> f80f407cda64a4c1e7968781b71004b929be30b3
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
<<<<<<< HEAD
            ], 
             [
                'brand_name' => 'MK',
=======
            ],
             [
                'brand_name' => 'DIOR',
>>>>>>> f80f407cda64a4c1e7968781b71004b929be30b3
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
<<<<<<< HEAD
            ],  
=======
            ],
             [
                'brand_name' => 'CALVIN KLEIN',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
             [
                'brand_name' => 'TOM FORD',
                'category_id' => 1,'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ]
>>>>>>> f80f407cda64a4c1e7968781b71004b929be30b3
        ];

        // Insert the data into the 'brands' table
        DB::table('brands')->insert($brands);
    }
}
