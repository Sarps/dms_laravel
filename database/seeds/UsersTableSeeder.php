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
        $users = \App\Branch::first()->users()
            ->createMany([
                [
                    'name' => 'Emmanuel Sarpong',
                    'email' => 'esarpong51@gmail.com',
                    'password' => Hash::make('secret')
                ],
                [
                    'name' => 'Efisah Buckman',
                    'email' => 'thatkutekwame@gmail.com',
                    'password' => Hash::make('efisah')
                ]
            ]);

    }
}
