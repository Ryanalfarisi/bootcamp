<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(15),
        'desc' => $faker->realText(rand(80, 600)),
        'released_date'  => $faker->date(),
        'rating' => rand(1,100),
        'genre' => $faker->sentence(5),
        'cover'  => $faker->imageUrl(640, 480),
        'slug'   => str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($faker->sentence(5))))),
    ];
});
