<?php

use Faker\Generator as Faker;
use App\Movie;
$factory->define(Movie::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl,
        'duration' => $faker->numberBetween(60,180),
        'releaseDate' => $faker->date,
        'genres' => $faker->words($nb = 3, $asText = false)
    ];
});
