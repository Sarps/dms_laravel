<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'name' => 'Emmanuel Sarpong',
                'email' => 'esarpong51@gmail.com',
                'password' => Hash::make('secret')
        ]);

//        User::create([
//            'name' => 'Emmanuel Sarpong',
//            'email' => 'esarpong51@gmail.com',
//            'password' => Hash::make('secret')
//        ]);

    }
}
