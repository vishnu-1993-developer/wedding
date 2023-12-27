<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('references')->delete();
        
        \DB::table('references')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Papa',
                'active' => 1,
                'created_at' => '2023-11-14 04:02:32',
                'updated_at' => '2023-11-14 04:02:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Maa',
                'active' => 1,
                'created_at' => '2023-11-14 05:02:45',
                'updated_at' => '2023-11-14 05:02:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Vishnu',
                'active' => 1,
                'created_at' => '2023-11-16 11:45:21',
                'updated_at' => '2023-11-16 11:45:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Rakesh Chourasiya',
                'active' => 1,
                'created_at' => '2023-11-16 11:48:11',
                'updated_at' => '2023-11-16 11:48:11',
            ),
        ));
        
        
    }
}