<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Spatie\Permission\Models\Role::createMany([
            ['name' => 'superuser'],
            ['name' => 'admin'],
            ['name' => 'staff'],
        ]);
    }
}
