<?php

$factory->define(App\UserMute::class, function (Faker\Generator $faker) {

    return [

        'description' => $faker->name
    ];
});