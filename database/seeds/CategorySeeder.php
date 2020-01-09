<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::insert([
            ['name' => 'Body parts'],
            ['name' => 'Maintenance'],
            ['name' => 'Repair'],
            ['name' => 'Accesories'],
            ['name' => 'Other Category'],
        ]);
    }
}
