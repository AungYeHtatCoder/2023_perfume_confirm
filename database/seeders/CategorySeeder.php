<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = [
            [
                'brand_category_name' => 'A'
            ],
            [
                'brand_category_name' => 'B'
            ],
            [
                'brand_category_name' => 'C'
            ],
            [
                'brand_category_name' => 'D'
            ],
            [
                'brand_category_name' => 'E'
            ],
            [
                'brand_category_name' => 'F'
            ],
            [
                'brand_category_name' => 'G'
            ],
            [
                'brand_category_name' => 'H'
            ],
         [
            'brand_category_name' => 'I'
         ],
         [
            'brand_category_name' => 'J'
         ],
         [
            'brand_category_name' => 'K'
         ],
         [
            'brand_category_name' => 'L'
         ],
         [
            'brand_category_name' => 'M'
         ],
         [
            'brand_category_name' => 'N'
         ],
         [
            'brand_category_name' => 'O'
         ],
         [
            'brand_category_name' => 'P'
         ],
         [
            'brand_category_name' => 'Q'
         ],
         [
            'brand_category_name' => 'R'
         ],
         [
            'brand_category_name' => 'S'
         ],
         [
            'brand_category_name' => 'T'
         ],
         [
            'brand_category_name' => 'U'
         ],
         [
            'brand_category_name' => 'V'
         ],
         [
            'brand_category_name' => 'W'
         ],
         [
            'brand_category_name' => 'X'
         ],
         [
            'brand_category_name' => 'Y'
         ],
         [
            'brand_category_name' => 'Z'
         ]
            
            // Add more categories as needed
        ];

        // Insert the data into the 'categories' table
        DB::table('categories')->insert($categories);
    }
}