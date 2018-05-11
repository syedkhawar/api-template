<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        "name" => $faker->word,
        "detail" => $faker->paragraph,
        "price" => $faker->numberBetween(100, 1000),
        "stock" => $faker->numberBetween(3, 40),
        "discount" => $faker->numberBetween(5, 30)
    ];
});
