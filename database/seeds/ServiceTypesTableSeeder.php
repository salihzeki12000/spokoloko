<?php

use Illuminate\Database\Seeder;

class ServiceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicetypes')->insert([
            ['id' => 1, 'name' => 'Catering'],
            ['id' => 2, 'name' => 'Agencje eventowe'],
            ['id' => 3, 'name' => 'Muzyka'],
            ['id' => 4, 'name' => 'Foto i wideo'],
            ['id' => 5, 'name' => 'Inne'],

        ]);
    }
}
