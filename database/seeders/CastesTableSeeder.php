<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CastesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('castes')->delete();
        
        \DB::table('castes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Barai',
                'active' => 1,
                'created_at' => '2023-11-14 04:46:57',
                'updated_at' => '2023-11-14 04:46:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sinha',
                'active' => 1,
                'created_at' => '2023-11-15 14:30:53',
                'updated_at' => '2023-11-15 14:30:53',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ghansi',
                'active' => 1,
                'created_at' => '2023-11-15 15:22:39',
                'updated_at' => '2023-11-15 15:22:39',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Singh',
                'active' => 1,
                'created_at' => '2023-11-15 15:26:48',
                'updated_at' => '2023-11-15 15:26:48',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Yadav',
                'active' => 1,
                'created_at' => '2023-11-16 10:59:57',
                'updated_at' => '2023-11-16 10:59:57',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Rana',
                'active' => 1,
                'created_at' => '2023-11-16 11:01:14',
                'updated_at' => '2023-11-16 11:01:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'MD',
                'active' => 1,
                'created_at' => '2023-11-16 11:02:20',
                'updated_at' => '2023-11-16 11:02:20',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Saw',
                'active' => 1,
                'created_at' => '2023-11-16 11:03:21',
                'updated_at' => '2023-11-16 11:03:21',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Pathak',
                'active' => 1,
                'created_at' => '2023-11-16 11:12:24',
                'updated_at' => '2023-11-16 11:12:24',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Pandey',
                'active' => 1,
                'created_at' => '2023-11-16 11:30:19',
                'updated_at' => '2023-11-16 11:30:19',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Das',
                'active' => 1,
                'created_at' => '2023-11-16 11:31:31',
                'updated_at' => '2023-11-16 11:31:31',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ojha',
                'active' => 1,
                'created_at' => '2023-11-16 11:33:35',
                'updated_at' => '2023-11-16 11:33:35',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Prasad',
                'active' => 1,
                'created_at' => '2023-11-16 11:34:41',
                'updated_at' => '2023-11-16 11:34:41',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Paswan',
                'active' => 1,
                'created_at' => '2023-11-16 11:35:57',
                'updated_at' => '2023-11-16 11:35:57',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Nayak',
                'active' => 1,
                'created_at' => '2023-11-16 11:38:07',
                'updated_at' => '2023-11-16 11:38:07',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Lal',
                'active' => 1,
                'created_at' => '2023-11-16 11:40:13',
                'updated_at' => '2023-11-16 11:40:13',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Gupta',
                'active' => 1,
                'created_at' => '2023-11-16 11:41:59',
                'updated_at' => '2023-11-16 11:41:59',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Ram',
                'active' => 1,
                'created_at' => '2023-11-16 11:45:03',
                'updated_at' => '2023-11-16 11:45:03',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bhagat',
                'active' => 1,
                'created_at' => '2023-11-16 11:45:49',
                'updated_at' => '2023-11-16 11:45:49',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Vishwakarma',
                'active' => 1,
                'created_at' => '2023-11-16 11:56:32',
                'updated_at' => '2023-11-16 11:56:32',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Mahto',
                'active' => 1,
                'created_at' => '2023-11-16 13:18:40',
                'updated_at' => '2023-11-16 13:18:40',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Rai',
                'active' => 1,
                'created_at' => '2023-11-16 13:31:20',
                'updated_at' => '2023-11-16 13:31:20',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Bhuiyan',
                'active' => 1,
                'created_at' => '2023-11-16 14:21:07',
                'updated_at' => '2023-11-16 14:21:07',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Giri',
                'active' => 1,
                'created_at' => '2023-11-16 14:24:35',
                'updated_at' => '2023-11-16 14:24:35',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Soni',
                'active' => 1,
                'created_at' => '2023-11-16 15:07:04',
                'updated_at' => '2023-11-16 15:07:04',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Kant',
                'active' => 1,
                'created_at' => '2023-11-16 15:10:04',
                'updated_at' => '2023-11-16 15:10:04',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Prajapati',
                'active' => 1,
                'created_at' => '2023-11-16 15:55:08',
                'updated_at' => '2023-11-16 15:55:08',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Thakur',
                'active' => 1,
                'created_at' => '2023-11-16 15:58:03',
                'updated_at' => '2023-11-16 15:58:03',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Pandit',
                'active' => 1,
                'created_at' => '2023-11-16 16:22:57',
                'updated_at' => '2023-11-16 16:22:57',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Chowl',
                'active' => 1,
                'created_at' => '2023-11-16 16:33:43',
                'updated_at' => '2023-11-16 16:33:43',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Bakshi',
                'active' => 1,
                'created_at' => '2023-11-16 16:37:00',
                'updated_at' => '2023-11-16 16:37:00',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Verma',
                'active' => 1,
                'created_at' => '2023-11-16 16:40:06',
                'updated_at' => '2023-11-16 16:40:06',
            ),
        ));
        
        
    }
}