<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scent = [
            ['scent_name' => 'Men Scent',
             'created_at' => '2023-08-25 16:35:53',
             'updated_at' => '2023-08-25 16:35:53'
            ],
            ['scent_name' => 'Women Scent',
             'created_at' => '2023-08-25 16:35:53',
             'updated_at' => '2023-08-25 16:35:53'
            ],
            ['scent_name' => 'Strong Scent',
             'created_at' => '2023-08-25 16:35:53',
             'updated_at' => '2023-08-25 16:35:53'
            ],
            ['scent_name' => 'Soft Scent',
             'created_at' => '2023-08-25 16:35:53',
             'updated_at' => '2023-08-25 16:35:53'
            ],
           
            
            // Add more scent here
        ];

        DB::table('scents')->insert($scent);
    }
}