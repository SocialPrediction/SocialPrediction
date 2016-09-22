<?php

$factory->define(App\UserType::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name
    ];
});