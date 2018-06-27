<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'gender' => $faker->randomElement(['male','female']),
        'address' => $faker->address,
        'ip_address' => $faker->ipv4
    ];
});




