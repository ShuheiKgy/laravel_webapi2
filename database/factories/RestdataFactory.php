<?php

use Faker\Generator as Faker;

$factory->define(App\Restdata::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'message' => $faker->text(100),
    ];
});
