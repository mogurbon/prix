<?php

use Faker\Generator as Faker;

$factory->define(App\Courier::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});



