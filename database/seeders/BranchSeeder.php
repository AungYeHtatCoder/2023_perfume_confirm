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
                'brand_name' => 'Abercrombie & Fitch',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Accessorize',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Agent Provocateur',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ], 
             [
                'brand_name' => 'Alaia',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ], 
             [
                'brand_name' => 'Alexander McQueen',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ], 
             [
                'brand_name' => 'Alexander Simone',
                'category_id' => 1,'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
             [
                'brand_name' => 'All Saints',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'American Crew',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Amouroud',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Anna Sui',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Aramis',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Archipelago Botanicals',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Ardell',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Argan+',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
             [
                'brand_name' => 'Ariana Grande',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Armani',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Aroma Works',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Arran',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Australian Bodycare',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Avant Skincare',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Axis',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
             [
                'brand_name' => 'Azzaro',
                'category_id' => 1,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            // B brands
            [
                'brand_name' => 'Balenciaga',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Banana Republic',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Barber Pro',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Barbour',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Batman',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Baylis & Harding',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Beaudiani',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Beauty Bakerie',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'BeautyPro',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Benton',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Beyonce',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Billie Eilish',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Bohoboco',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Bomb Cosmetics',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Britney Spears',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Bronnley',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Brut',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Bubble Boutique',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Bubble up',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Bulldog',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Burberry',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Butter London',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Bvlgari',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Byredo',
                'category_id' => 2,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Cachrel',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Calvin Klein',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'

            ],
            [
                'brand_name' => 'Carmex',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Carolina Herrera',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Cartier',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Cadillac',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Calum Best',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'
            ],
            [
                'brand_name' => 'Calvin Klein',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Candlelight',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Candy Crush',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Cath Kidston',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            
            [
                'brand_name' => 'Caudalie',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Cerruti',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 

            ],
            [
                'brand_name' => 'Chanel',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Chantecaille',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Chloe',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Chopard',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Christian Dior',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Christophe Robin',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Connock London',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Caty L Aimant',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Cowshed',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Creightons',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Ciate London',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Clarins',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Clarisonic',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Clean',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Clinique',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Coach',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Colgate',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Collistar',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            [
                'brand_name' => 'Comme des Garcons',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Cristiano Ronaldo',
                'category_id' => 3,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53'  
            ],
            // D series 
            [
                'brand_name' => 'D',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Daisy',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'David Beckham',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Davidoff',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Davines',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dax',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dead Sea Spa Magik',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Decleor',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dermalogica',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Diesel',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dior',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'DKNY',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dolce & Gabbana',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dove',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dr Botanicals',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dr Hauschka',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dr Paw Paw',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dr Sebagh',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dr Teals',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dunhill',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Duo',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            [
                'brand_name' => 'Dunhill',
                'category_id' => 4,
                'branch_logo' => 'https://res.cloudinary.com/dqzxp',
                'created_at' => '2023-08-25 16:35:53',
                'updated_at' => '2023-08-25 16:35:53' 
            ],
            
        ];

        // Insert the data into the 'brands' table
        DB::table('brands')->insert($brands);
    }
}