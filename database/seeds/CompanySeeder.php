<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = \App\Company::create([
            'name' => 'Kwansah Auto',
            'address' => 'Box 4415, Cantonments, Accra Main Street',
            'contact' => '+233554253285',
            'motto' => 'Something is our motto',
        ]);

        // $company->addMedia(public_path('images/kwansah_auto_logo.png'))->toMediaCollection('uploads', 'public');

    }
}
