<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryType;


class CategoryTypeTableDataSeeder extends Seeder
{
    public function run()
    {
        $types = array(
            array('id' => '1','name' => 'Men','status' => '1','type_id' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '2','name' => 'Kid','status' => '1','type_id' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '3','name' => 'Women','status' => '1','type_id' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),

            array('id' => '4','name' => 'Meat','status' => '1','type_id' => '4','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '5','name' => 'Fish','status' => '1','type_id' => '4','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '6','name' => 'Fresh Vegetables','status' => '1','type_id' => '4','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '7','name' => 'Rice','status' => '1','type_id' => '4','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '8','name' => 'Egg','status' => '1','type_id' => '4','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '9','name' => 'Dry Fruits','status' => '1','type_id' => '4','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),

        );

        foreach ($types as $key => $type) {
            CategoryType::firstOrCreate(
                [ 'id'       => $type['id'] ],
                [
                    'name'             => $type['name'],
                    'status'            => $type['status'],
                    'type_id'            => $type['type_id'],
                    'created_at'       => $type['created_at'],
                    'updated_at'       => $type['updated_at'],
                ]
            );
        }
    }
}
