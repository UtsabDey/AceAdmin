<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = array(
            array('id' => '1','created_by' => '1','updated_by' => '1','name' => 'Natore','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '2','created_by' => '1','updated_by' => '1','name' => 'testv','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-11 18:16:11'),
            array('id' => '3','created_by' => '1','updated_by' => '1','name' => 'Chuadanga','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '4','created_by' => '1','updated_by' => '1','name' => 'Chittagong','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '5','created_by' => '1','updated_by' => '1','name' => 'Bogra','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '6','created_by' => '1','updated_by' => '1','name' => 'Sylhet','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '7','created_by' => '1','updated_by' => '1','name' => 'Bandarban','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '8','created_by' => '1','updated_by' => '1','name' => 'Sirajganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '9','created_by' => '1','updated_by' => '1','name' => 'Lakshmipur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '10','created_by' => '1','updated_by' => '1','name' => 'Bhola','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '11','created_by' => '1','updated_by' => '1','name' => 'Lalmonirhat','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '12','created_by' => '1','updated_by' => '1','name' => 'Rajbari','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '13','created_by' => '1','updated_by' => '1','name' => 'Narayanganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '14','created_by' => '1','updated_by' => '1','name' => 'Kishoreganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '15','created_by' => '1','updated_by' => '1','name' => 'Mymensingh','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '16','created_by' => '1','updated_by' => '1','name' => 'Comilla','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '17','created_by' => '1','updated_by' => '1','name' => 'Narail','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '18','created_by' => '1','updated_by' => '1','name' => 'Satkhira','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '19','created_by' => '1','updated_by' => '1','name' => 'Madaripur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '20','created_by' => '1','updated_by' => '1','name' => 'Shariatpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '21','created_by' => '1','updated_by' => '1','name' => 'Thakurgaon','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '22','created_by' => '1','updated_by' => '1','name' => 'Rangpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '23','created_by' => '1','updated_by' => '1','name' => 'Dinajpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '24','created_by' => '1','updated_by' => '1','name' => 'Panchagarh','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '25','created_by' => '1','updated_by' => '1','name' => 'Rangamati','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '26','created_by' => '1','updated_by' => '1','name' => 'Jessore','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '27','created_by' => '1','updated_by' => '1','name' => 'Khagrachhari','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '28','created_by' => '1','updated_by' => '1','name' => 'Joypurhat','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '29','created_by' => '1','updated_by' => '1','name' => 'Gazipur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '30','created_by' => '1','updated_by' => '1','name' => 'Jhenaidah','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '31','created_by' => '1','updated_by' => '1','name' => 'Noakhali','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '32','created_by' => '1','updated_by' => '1','name' => 'Rajshahi','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '33','created_by' => '1','updated_by' => '1','name' => 'Manikganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '34','created_by' => '1','updated_by' => '1','name' => 'Kushtia','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '35','created_by' => '1','updated_by' => '1','name' => 'Pabna','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '36','created_by' => '1','updated_by' => '1','name' => 'Moulvibazar','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '37','created_by' => '1','updated_by' => '1','name' => 'Khulna','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '38','created_by' => '1','updated_by' => '1','name' => 'Kurigram','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '39','created_by' => '1','updated_by' => '1','name' => 'Jamalpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '40','created_by' => '1','updated_by' => '1','name' => 'Munshiganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '41','created_by' => '1','updated_by' => '1','name' => 'Narsingdi','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '42','created_by' => '1','updated_by' => '1','name' => 'Patuakhali','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '43','created_by' => '1','updated_by' => '1','name' => 'Netrakona','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '44','created_by' => '1','updated_by' => '1','name' => 'Gaibandha','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '45','created_by' => '1','updated_by' => '1','name' => 'Meherpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '46','created_by' => '1','updated_by' => '1','name' => 'Brahmanbaria','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '47','created_by' => '1','updated_by' => '1','name' => 'Sherpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '48','created_by' => '1','updated_by' => '1','name' => 'Magura','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '49','created_by' => '1','updated_by' => '1','name' => 'Nilphamari','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '50','created_by' => '1','updated_by' => '1','name' => 'Nawabganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '51','created_by' => '1','updated_by' => '1','name' => 'Barisal','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '52','created_by' => '1','updated_by' => '1','name' => 'Sunamganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '53','created_by' => '1','updated_by' => '1','name' => 'Barguna','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '54','created_by' => '1','updated_by' => '1','name' => 'Faridpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '55','created_by' => '1','updated_by' => '1','name' => 'Jhalokati','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '56','created_by' => '1','updated_by' => '1','name' => 'Tangail','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '57','created_by' => '1','updated_by' => '1','name' => 'Pirojpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '58','created_by' => '1','updated_by' => '1','name' => 'Dhaka','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '59','created_by' => '1','updated_by' => '1','name' => 'Gopalganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '60','created_by' => '1','updated_by' => '1','name' => 'Feni','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '61','created_by' => '1','updated_by' => '1','name' => 'Bagerhat','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '62','created_by' => '1','updated_by' => '1','name' => 'Cox\'s Bazar','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '63','created_by' => '1','updated_by' => '1','name' => 'Chandpur','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24'),
            array('id' => '64','created_by' => '1','updated_by' => '1','name' => 'Habiganj','created_at' => '2021-09-08 17:11:24','updated_at' => '2021-09-08 17:11:24')
        );

        foreach ($districts as $key => $district) {
            District::firstOrCreate(
                [ 'id'       => $district['id'] ],
                [
                    'created_by'       => $district['created_by'],
                    'updated_by'       => $district['updated_by'],
                    'name'             => $district['name'],
                    'created_at'       => $district['created_at'],
                    'updated_at'       => $district['updated_at'],
                ]
            );
        }
    }
}
