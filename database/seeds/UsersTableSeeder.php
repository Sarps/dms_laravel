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
        /** @var \Illuminate\Support\Collection $users */
        $users = collect([
            [
                'name' => 'Emmanuel Sarpong',
                'email' => 'esarpong51@gmail.com',
                'password' => 'secret'
            ],
            [
                'name' => 'Efisah Buckman',
                'email' => 'thatkutekwame@gmail.com',
                'password' => 'efisah'
            ],
            [
                'name' => 'Richard Anane',
                'email' => 'ranane@gmail.com',
                'password' => 'rich'
            ],
        ]);
        $company = \App\Company::first();
//        $company->users()->createMany($users);
        $branch = \App\Branch::first();
//        foreach ($users as $userData) {
//            /** @var \App\Staff $staff */
//            $staff = $branch->staff()->create();
//            $user = $staff->user()->create($userData);
//        };
        $company->users()->saveMany(
            $users->map(function ($userData) use ($branch) {
                /** @var \App\Staff $staff */
                $staff = $branch->staff()->create();
                return $staff->user()->create($userData);
            })
        );
    }
}
