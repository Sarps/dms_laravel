<?php

use Illuminate\Database\Seeder;

class PartModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\PartModel::insert([
            ['name' => 'Camry', 'manufacturer_id' => 1], // Toyota
            ['name' => 'Explorer', 'manufacturer_id' => 3], // Ford
            ['name' => 'Pride', 'manufacturer_id' => 5], // KIA
            ['name' => 'Other Model', 'manufacturer_id' => 7], // Others
        ]);
    }
}
