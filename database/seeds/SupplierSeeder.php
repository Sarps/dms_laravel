<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Supplier::insert([
            ['name' => 'Toyota Ghana', 'address' => 'Motorway, Accra', 'contact' => '06789456'],
            ['name' => 'Generic', 'address' => 'Unknown', 'contact' => 'Unknown'],
        ]);
    }
}
