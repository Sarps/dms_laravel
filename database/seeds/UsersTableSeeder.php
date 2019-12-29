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
        /** @var User $user */
        $user = User::create([
                'name' => 'Emmanuel Sarpong',
                'email' => 'esarpong51@gmail.com',
                'password' => Hash::make('secret')
        ]);
        $user->branch()->associate(\App\Branch::first());
        $user->save();

//        User::create([
//            'name' => 'Emmanuel Sarpong',
//            'email' => 'esarpong51@gmail.com',
//            'password' => Hash::make('secret')
//        ]);

    }
}
