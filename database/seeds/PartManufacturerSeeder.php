<?php

use Illuminate\Database\Seeder;

class PartManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\PartManufacturer::insert([
            ['name' => 'Toyota', 'location' => 'Japan'],
            ['name' => 'Nissan', 'location' => 'Japan'],
            ['name' => 'Ford', 'location' => 'USA'],
            ['name' => 'BMW', 'location' => 'Germany'],
            ['name' => 'KIA', 'location' => 'Korea'],
            ['name' => 'Suzuki', 'location' => 'Japan'],
            ['name' => 'Generic', 'location' => 'Unknown'],
        ]);
    }
}
