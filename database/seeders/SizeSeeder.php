<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $size = [
            ['name' => 'Large',
             'created_at' => '2023-08-25 16:35:53',
             'updated_at' => '2023-08-25 16:35:53'
            ],
            ['name' => 'Small',
             'created_at' => '2023-08-25 16:35:53',
             'updated_at' => '2023-08-25 16:35:53'
            ],
            // Add more scent here
        ];

        DB::table('sizes')->insert($size);
    }
}
