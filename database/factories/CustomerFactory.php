<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'account_name' => $faker->bankAccountNumber,
        'name' => $faker->name,
        'address' => $faker->address,
        'mobile' => $faker->phoneNumber,
        'telephone' => $faker->e164PhoneNumber,
        'account_type' => $faker->randomElement(['Savings', 'Credit', 'Checking']),
        'account_ref' => $faker->randomNumber(6),
        'credit_limit' => $faker->numberBetween(),
        'tax_type' => $faker->randomElement(['Simple', 'Compound']),
        'tax_perc' => $faker->randomFloat(2, 0, 20),
        'status' => $faker->randomElement(['ACTIVE', 'INACTIVE']),
        'on_hold' => $faker->boolean,
        'stop_account' => $faker->boolean
    ];
});
