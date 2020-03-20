<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Series;
use Faker\Generator as Faker;

$factory->define(Series::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'subtitle' => $faker->sentence(6),
        'status' => $faker->randomElement(['in_progress', 'done', 'archived'])
    ];
});
