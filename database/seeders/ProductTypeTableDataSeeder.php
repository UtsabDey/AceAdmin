<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeTableDataSeeder extends Seeder
{
    public function run()
    {
        $types = array(
            array('id' => '1','name' => 'Fashion','image' => '','description' => '','status' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '2','name' => 'Medicine','image' => '','description' => '','status' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '3','name' => 'Book','image' => '','description' => '','status' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '4','name' => 'Food','image' => '','description' => '','status' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '5','name' => 'General','image' => '','description' => '','status' => '1','created_at' => '2022-05-31 17:11:24','updated_at' => '2021-09-08 17:11:24'),
        );

        foreach ($types as $key => $type) {
            ProductType::firstOrCreate(
                [ 'id'       => $type['id'] ],
                [
                    'name'             => $type['name'],
                    'image'            => $type['image'],
                    'description'      => $type['description'],
                    'status'            => $type['status'],
                    'created_at'       => $type['created_at'],
                    'updated_at'       => $type['updated_at'],
                ]
            );
        }
    }
}
