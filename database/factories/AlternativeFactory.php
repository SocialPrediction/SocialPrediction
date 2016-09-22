<?php

$factory->define(App\Alternative::class, function (Faker\Generator $faker) {

    return [

        'description' => $faker->name
    ];
});