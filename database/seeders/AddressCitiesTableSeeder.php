<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('address_cities')->delete();
        
        \DB::table('address_cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_name' => 'Garilong',
                'active' => 1,
                'created_at' => '2023-11-14 04:58:38',
                'updated_at' => '2023-11-14 04:58:38',
            ),
            1 => 
            array (
                'id' => 2,
                'city_name' => 'Tandwa',
                'active' => 1,
                'created_at' => '2023-11-14 05:00:17',
                'updated_at' => '2023-11-14 05:00:17',
            ),
            2 => 
            array (
                'id' => 3,
                'city_name' => 'Kamta',
                'active' => 1,
                'created_at' => '2023-11-14 05:00:24',
                'updated_at' => '2023-11-14 05:00:24',
            ),
            3 => 
            array (
                'id' => 4,
                'city_name' => 'Raham',
                'active' => 1,
                'created_at' => '2023-11-14 05:00:32',
                'updated_at' => '2023-11-14 05:00:32',
            ),
            4 => 
            array (
                'id' => 5,
                'city_name' => 'Lohardaga',
                'active' => 1,
                'created_at' => '2023-11-14 05:01:46',
                'updated_at' => '2023-11-14 05:01:46',
            ),
            5 => 
            array (
                'id' => 6,
                'city_name' => 'Gumla',
                'active' => 0,
                'created_at' => '2023-11-14 05:01:52',
                'updated_at' => '2023-11-14 05:01:52',
            ),
            6 => 
            array (
                'id' => 7,
                'city_name' => 'Ranchi',
                'active' => 1,
                'created_at' => '2023-11-14 05:01:59',
                'updated_at' => '2023-11-14 05:01:59',
            ),
            7 => 
            array (
                'id' => 8,
                'city_name' => 'Panki',
                'active' => 1,
                'created_at' => '2023-11-14 11:42:05',
                'updated_at' => '2023-11-14 11:42:05',
            ),
            8 => 
            array (
                'id' => 9,
                'city_name' => 'Daltenganj',
                'active' => 1,
                'created_at' => '2023-11-14 11:43:56',
                'updated_at' => '2023-11-14 11:43:56',
            ),
            9 => 
            array (
                'id' => 10,
                'city_name' => 'Garhwa',
                'active' => 1,
                'created_at' => '2023-11-14 15:10:20',
                'updated_at' => '2023-11-14 15:10:20',
            ),
            10 => 
            array (
                'id' => 11,
                'city_name' => 'Chauparan',
                'active' => 1,
                'created_at' => '2023-11-14 15:19:38',
                'updated_at' => '2023-11-14 15:19:38',
            ),
            11 => 
            array (
                'id' => 12,
                'city_name' => 'Hazaribagh',
                'active' => 1,
                'created_at' => '2023-11-15 14:25:05',
                'updated_at' => '2023-11-15 14:25:05',
            ),
            12 => 
            array (
                'id' => 13,
                'city_name' => 'Patratu',
                'active' => 1,
                'created_at' => '2023-11-15 14:26:29',
                'updated_at' => '2023-11-15 14:26:29',
            ),
            13 => 
            array (
                'id' => 14,
                'city_name' => 'Rai',
                'active' => 1,
                'created_at' => '2023-11-15 14:28:32',
                'updated_at' => '2023-11-15 14:28:32',
            ),
            14 => 
            array (
                'id' => 15,
                'city_name' => 'Simdega',
                'active' => 1,
                'created_at' => '2023-11-15 14:29:47',
                'updated_at' => '2023-11-15 14:29:47',
            ),
            15 => 
            array (
                'id' => 16,
                'city_name' => 'Khelari',
                'active' => 1,
                'created_at' => '2023-11-15 14:30:29',
                'updated_at' => '2023-11-15 14:30:29',
            ),
            16 => 
            array (
                'id' => 17,
                'city_name' => 'Hyderabad',
                'active' => 1,
                'created_at' => '2023-11-15 14:56:59',
                'updated_at' => '2023-11-15 14:56:59',
            ),
            17 => 
            array (
                'id' => 18,
                'city_name' => 'Aurangabad',
                'active' => 1,
                'created_at' => '2023-11-15 15:00:36',
                'updated_at' => '2023-11-15 15:00:36',
            ),
            18 => 
            array (
                'id' => 19,
                'city_name' => 'Nokha',
                'active' => 1,
                'created_at' => '2023-11-15 15:09:36',
                'updated_at' => '2023-11-15 15:09:36',
            ),
            19 => 
            array (
                'id' => 20,
                'city_name' => 'Kosaha',
                'active' => 1,
                'created_at' => '2023-11-15 15:22:20',
                'updated_at' => '2023-11-15 15:22:20',
            ),
            20 => 
            array (
                'id' => 21,
                'city_name' => 'Saradhu',
                'active' => 1,
                'created_at' => '2023-11-15 15:24:13',
                'updated_at' => '2023-11-15 15:24:13',
            ),
            21 => 
            array (
                'id' => 22,
                'city_name' => 'Barkutte',
                'active' => 1,
                'created_at' => '2023-11-16 11:11:07',
                'updated_at' => '2023-11-16 11:11:07',
            ),
            22 => 
            array (
                'id' => 23,
                'city_name' => 'Soparam',
                'active' => 1,
                'created_at' => '2023-11-16 11:12:13',
                'updated_at' => '2023-11-16 11:12:13',
            ),
            23 => 
            array (
                'id' => 24,
                'city_name' => 'Kumarang',
                'active' => 1,
                'created_at' => '2023-11-16 11:33:25',
                'updated_at' => '2023-11-16 11:33:25',
            ),
            24 => 
            array (
                'id' => 25,
                'city_name' => 'Bagodar',
                'active' => 1,
                'created_at' => '2023-11-16 11:46:41',
                'updated_at' => '2023-11-16 11:46:41',
            ),
            25 => 
            array (
                'id' => 26,
                'city_name' => 'Nawada',
                'active' => 1,
                'created_at' => '2023-11-16 11:47:49',
                'updated_at' => '2023-11-16 11:47:49',
            ),
            26 => 
            array (
                'id' => 27,
                'city_name' => 'Ranchi',
                'active' => 1,
                'created_at' => '2023-11-16 11:49:29',
                'updated_at' => '2023-11-16 11:49:29',
            ),
            27 => 
            array (
                'id' => 28,
                'city_name' => 'Ramgarh',
                'active' => 1,
                'created_at' => '2023-11-16 11:52:41',
                'updated_at' => '2023-11-16 11:52:41',
            ),
            28 => 
            array (
                'id' => 29,
                'city_name' => 'Badki Tand',
                'active' => 1,
                'created_at' => '2023-11-16 12:03:01',
                'updated_at' => '2023-11-16 12:03:01',
            ),
            29 => 
            array (
                'id' => 30,
                'city_name' => 'Pandey More',
                'active' => 1,
                'created_at' => '2023-11-16 13:16:13',
                'updated_at' => '2023-11-16 13:16:13',
            ),
            30 => 
            array (
                'id' => 31,
                'city_name' => 'Kalyanpur',
                'active' => 1,
                'created_at' => '2023-11-16 13:17:35',
                'updated_at' => '2023-11-16 13:17:35',
            ),
            31 => 
            array (
                'id' => 32,
                'city_name' => 'Chatra',
                'active' => 1,
                'created_at' => '2023-11-16 15:57:16',
                'updated_at' => '2023-11-16 15:57:16',
            ),
            32 => 
            array (
                'id' => 33,
                'city_name' => 'Dhanbad',
                'active' => 1,
                'created_at' => '2023-11-16 16:03:28',
                'updated_at' => '2023-11-16 16:03:28',
            ),
            33 => 
            array (
                'id' => 34,
                'city_name' => 'Bijupada',
                'active' => 1,
                'created_at' => '2023-11-16 16:18:33',
                'updated_at' => '2023-11-16 16:18:33',
            ),
            34 => 
            array (
                'id' => 35,
                'city_name' => 'Gonda',
                'active' => 1,
                'created_at' => '2023-11-16 16:22:12',
                'updated_at' => '2023-11-16 16:22:12',
            ),
            35 => 
            array (
                'id' => 36,
                'city_name' => 'Amarwadih',
                'active' => 1,
                'created_at' => '2023-11-16 16:23:46',
                'updated_at' => '2023-11-16 16:23:46',
            ),
            36 => 
            array (
                'id' => 37,
                'city_name' => 'Barachatti',
                'active' => 1,
                'created_at' => '2023-11-16 16:24:41',
                'updated_at' => '2023-11-16 16:24:41',
            ),
            37 => 
            array (
                'id' => 38,
                'city_name' => 'Bhabua',
                'active' => 1,
                'created_at' => '2023-11-16 16:28:29',
                'updated_at' => '2023-11-16 16:28:29',
            ),
            38 => 
            array (
                'id' => 39,
                'city_name' => 'Latehar',
                'active' => 1,
                'created_at' => '2023-11-16 16:31:28',
                'updated_at' => '2023-11-16 16:31:28',
            ),
            39 => 
            array (
                'id' => 40,
                'city_name' => 'Moori',
                'active' => 1,
                'created_at' => '2023-11-16 16:33:25',
                'updated_at' => '2023-11-16 16:33:25',
            ),
            40 => 
            array (
                'id' => 41,
                'city_name' => 'New Delhi',
                'active' => 1,
                'created_at' => '2023-11-16 16:34:57',
                'updated_at' => '2023-11-16 16:34:57',
            ),
            41 => 
            array (
                'id' => 42,
                'city_name' => 'Badgaon',
                'active' => 1,
                'created_at' => '2023-11-16 16:35:54',
                'updated_at' => '2023-11-16 16:35:54',
            ),
            42 => 
            array (
                'id' => 43,
                'city_name' => 'Daru',
                'active' => 1,
                'created_at' => '2023-11-16 16:39:33',
                'updated_at' => '2023-11-16 16:39:33',
            ),
            43 => 
            array (
                'id' => 44,
                'city_name' => 'Ghaghra',
                'active' => 1,
                'created_at' => '2023-11-16 16:40:59',
                'updated_at' => '2023-11-16 16:40:59',
            ),
            44 => 
            array (
                'id' => 45,
                'city_name' => 'Ormanjhi',
                'active' => 1,
                'created_at' => '2023-11-16 16:42:23',
                'updated_at' => '2023-11-16 16:42:23',
            ),
        ));
        
        
    }
}