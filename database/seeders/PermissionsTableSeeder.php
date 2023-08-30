<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'permission_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '6',
                'title'      => 'role_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '7',
                'title'      => 'role_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '8',
                'title'      => 'role_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '9',
                'title'      => 'role_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '10',
                'title'      => 'role_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '11',
                'title'      => 'user_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],


            [
                'id'         => '17',
                'title'      => 'brand_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '18',
                'title'      => 'brand_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '19',
                'title'      => 'brand_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '20',
                'title'      => 'brand_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '21',
                'title'      => 'brand_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '22',
                'title'      => 'brand_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],


            [
                'id'         => '23',
                'title'      => 'category_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '24',
                'title'      => 'category_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '25',
                'title'      => 'category_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '26',
                'title'      => 'category_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '27',
                'title'      => 'category_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '28',
                'title'      => 'category_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],


            [
                'id'         => '29',
                'title'      => 'product_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '30',
                'title'      => 'product_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '31',
                'title'      => 'product_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '32',
                'title'      => 'product_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '33',
                'title'      => 'product_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '34',
                'title'      => 'product_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],

            [
                'id'         => '35',
                'title'      => 'order_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '36',
                'title'      => 'order_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '37',
                'title'      => 'order_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '38',
                'title'      => 'order_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '39',
                'title'      => 'order_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '40',
                'title'      => 'order_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],


             [
                'id'         => '41',
                'title'      => 'cart_item_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '42',
                'title'      => 'cart_item_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '43',
                'title'      => 'cart_item_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '44',
                'title'      => 'cart_item_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '45',
                'title'      => 'cart_item_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '46',
                'title'      => 'cart_item_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],


            [
                'id'         => '47',
                'title'      => 'payment_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '48',
                'title'      => 'payment_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '49',
                'title'      => 'payment_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '50',
                'title'      => 'payment_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '51',
                'title'      => 'payment_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '52',
                'title'      => 'payment_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],



            [
                'id'         => '53',
                'title'      => 'oreder_detail_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '54',
                'title'      => 'oreder_detail_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '55',
                'title'      => 'oreder_detail_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '56',
                'title'      => 'oreder_detail_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '57',
                'title'      => 'oreder_detail_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '58',
                'title'      => 'oreder_detail_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],


            [
                'id'         => '59',
                'title'      => 'cart_item_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '60',
                'title'      => 'cart_item_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '61',
                'title'      => 'cart_item_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '62',
                'title'      => 'cart_item_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '63',
                'title'      => 'cart_item_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '64',
                'title'      => 'cart_item_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],


            [
                'id'         => '65',
                'title'      => 'order_item_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '66',
                'title'      => 'order_item_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '67',
                'title'      => 'order_item_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '68',
                'title'      => 'order_item_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '69',
                'title'      => 'order_item_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '70',
                'title'      => 'order_item_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],

            [
                'id'         => '71',
                'title'      => 'brand_category_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '72',
                'title'      => 'brand_category_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '73',
                'title'      => 'brand_category_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '74',
                'title'      => 'brand_category_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '75',
                'title'      => 'brand_category_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '76',
                'title'      => 'brand_category_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],

            [
                'id'         => '77',
                'title'      => 'perfume_size_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '78',
                'title'      => 'perfume_size_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '79',
                'title'      => 'perfume_size_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '80',
                'title'      => 'perfume_size_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '81',
                'title'      => 'perfume_size_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '82',
                'title'      => 'perfume_size_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],

            [
                'id'         => '83',
                'title'      => 'scent_management_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '84',
                'title'      => 'scent_create',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '85',
                'title'      => 'scent_edit',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '86',
                'title'      => 'scent_show',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '87',
                'title'      => 'scent_delete',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],
            [
                'id'         => '88',
                'title'      => 'scent_access',
                'created_at' => '2023-02-10 14:00:26',
                'updated_at' => '2023-02-10 14:00:26',
            ],

        ];

        Permission::insert($permissions);

    }
}