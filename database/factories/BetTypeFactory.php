<?php

$factory->define(App\Models\BetType::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name

    ];
});