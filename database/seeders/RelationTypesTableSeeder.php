<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RelationTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('relation_types')->delete();
        
        \DB::table('relation_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'relation_type' => 'Relative',
                'active' => 1,
                'created_at' => '2023-11-16 17:35:06',
                'updated_at' => '2023-11-16 17:35:06',
            ),
            1 => 
            array (
                'id' => 2,
                'relation_type' => 'Gotiya',
                'active' => 1,
                'created_at' => '2023-11-16 17:35:14',
                'updated_at' => '2023-11-16 17:35:42',
            ),
            2 => 
            array (
                'id' => 3,
                'relation_type' => 'Friends',
                'active' => 1,
                'created_at' => '2023-11-16 17:35:35',
                'updated_at' => '2023-11-16 17:35:35',
            ),
            3 => 
            array (
                'id' => 4,
                'relation_type' => 'Villagers',
                'active' => 1,
                'created_at' => '2023-11-17 06:52:34',
                'updated_at' => '2023-11-17 06:52:34',
            ),
            4 => 
            array (
                'id' => 5,
                'relation_type' => 'Lohardaga Villager',
                'active' => 1,
                'created_at' => '2023-11-17 14:25:37',
                'updated_at' => '2023-11-17 14:25:37',
            ),
            5 => 
            array (
                'id' => 6,
                'relation_type' => 'Gumla Relative',
                'active' => 1,
                'created_at' => '2023-11-17 14:27:41',
                'updated_at' => '2023-11-17 14:27:41',
            ),
            6 => 
            array (
                'id' => 7,
                'relation_type' => 'Panki Relative',
                'active' => 1,
                'created_at' => '2023-11-17 14:28:36',
                'updated_at' => '2023-11-17 14:28:36',
            ),
            7 => 
            array (
                'id' => 8,
                'relation_type' => 'Garilong Villager',
                'active' => 1,
                'created_at' => '2023-11-17 14:29:59',
                'updated_at' => '2023-11-17 14:29:59',
            ),
            8 => 
            array (
                'id' => 9,
                'relation_type' => 'Maa Relative',
                'active' => 1,
                'created_at' => '2023-11-17 14:34:25',
                'updated_at' => '2023-11-17 14:34:25',
            ),
            9 => 
            array (
                'id' => 10,
                'relation_type' => 'Papa Relative',
                'active' => 1,
                'created_at' => '2023-11-17 14:35:31',
                'updated_at' => '2023-11-17 14:35:31',
            ),
        ));
        
        
    }
}