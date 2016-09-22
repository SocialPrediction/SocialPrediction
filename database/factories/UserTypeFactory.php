<?php

$factory->define(App\Models\UserType::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name
    ];
});