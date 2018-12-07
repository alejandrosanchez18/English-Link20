<?php

use Faker\Generator as Faker;
use App\Course;

$factory->define(Course::class, function (Faker $faker) {
    return [
         'name' => $faker->text(15),
         'description' => $faker->text(100),
         'price' => $faker->numberBetween(2000, 5000),
    ];
});
