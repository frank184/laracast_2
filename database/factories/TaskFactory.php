<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'completed' => rand(0,1) == 1,
    ];
});
