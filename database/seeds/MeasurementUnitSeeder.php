<?php

use Illuminate\Database\Seeder;

class MeasurementUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MeasurementUnit::insert([
            ['name' => 'each'],
            ['name' => 'pair'],
            ['name' => 'litre'],
            ['name' => 'meter']
        ]);
    }
}
