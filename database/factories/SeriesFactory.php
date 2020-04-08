<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Series;
use Faker\Generator as Faker;

$factory->define(Series::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'subtitle' => $faker->sentence(6),
        'status' => $faker->randomElement(['in_progress', 'done', 'archived']),
        'thumbnail_image' => $faker->randomElement([
            'https://images.unsplash.com/photo-1558981420-bf351ce8e3ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1834&q=80',
            'https://images.unsplash.com/photo-1586182821709-28327351a6d9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2200&q=80',
            'https://images.unsplash.com/photo-1586184914539-44573d10739d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1834&q=80',
            'https://images.unsplash.com/photo-1575497064651-615465e9f785?ixlib=rb-1.2.1&auto=format&fit=crop&w=1834&q=80'
        ])
    ];
});
