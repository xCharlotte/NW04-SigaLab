<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Competence::class, function (Faker $faker) {

    return [
      'name' => $faker->name,
      'description' => $faker->realText($maxNbChars = 30),
    ];
});
