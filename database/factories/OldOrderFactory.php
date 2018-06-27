<?php

use Faker\Generator as Faker;

$factory->define(App\OldOrder::class, function (Faker $faker) {
    return [
        'courier_id' => rand(1, App\Courier::count()),
        'eta_accomplished' => $faker->boolean,
        'order_created_at' => $faker->dateTime
    ];
});

