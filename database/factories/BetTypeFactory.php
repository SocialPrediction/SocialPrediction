<?php

$factory->define(App\BetType::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name

    ];
});