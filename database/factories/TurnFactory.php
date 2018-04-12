<?php

use App\Turn;
use Faker\Generator as Faker;

$factory->define(Turn::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'hour' => $faker->time($format = 'H:i', $max = 'now'),
        'comments' => $faker->sentence(15),
    ];
});
