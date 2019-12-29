<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PartManufacturerSeeder::class);
        $this->call(PartModelSeeder::class);
        $this->call(SupplierSeeder::class);
    }
}
