<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(2, true),
        'price' => $faker->randomElement([500.00, 650.00, 1000.00, 1250.00]),
        'items_available' => $faker->numberBetween(1, 20),
    ];
});
