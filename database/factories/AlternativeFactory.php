<?php

$factory->define(App\Models\Alternative::class, function (Faker\Generator $faker) {

    return [

        'description' => $faker->name
    ];
});