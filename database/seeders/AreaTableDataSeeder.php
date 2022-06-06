<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = array(
            array('id' => '1','created_by'  => '1','updated_by' => '1','name' => 'Uttora',      'district_id'       => '58','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '2','created_by'  => '1','updated_by' => '1','name' => 'Dhanmondi',       'district_id'       => '58','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-11 18:16:11'),
            array('id' => '3','created_by'  => '1','updated_by' => '1','name' => 'Chuadanga',   'district_id'       => '2','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '4','created_by'  => '1','updated_by' => '1','name' => 'Chittagong',  'district_id'       => '2','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '5','created_by'  => '1','updated_by' => '1','name' => 'Bogra',       'district_id'       => '3','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '6','created_by'  => '1','updated_by' => '1','name' => 'Sylhet',      'district_id'       => '3','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '7','created_by'  => '1','updated_by' => '1','name' => 'Bandarban',   'district_id'       => '3','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '8','created_by'  => '1','updated_by' => '1','name' => 'Sirajganj',   'district_id'       => '4','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '9','created_by'  => '1','updated_by' => '1','name' => 'Lakshmipur',  'district_id'       => '5','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '10','created_by' => '1','updated_by' => '1','name' => 'Bhola',       'district_id'       => '6','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
        );

        foreach ($areas as $key => $area) {
            Area::firstOrCreate(
                [ 'id'       => $area['id'] ],
                [
                    'created_by'       => $area['created_by'],
                    'updated_by'       => $area['updated_by'],
                    'name'             => $area['name'],
                    'district_id'      => $area['district_id'],
                    'created_at'       => $area['created_at'],
                    'updated_at'       => $area['updated_at'],
                ]
            );
        }
    }
}
