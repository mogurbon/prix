<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'courier_id' => rand(1, App\Courier::count()),
        'customer_id' => rand(1, App\Customer::count()),
        'order_created_at' =>$faker->dateTime()

    ];
});
