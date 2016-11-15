<?php
$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {

    return [
        'to' => $faker->name

    ];
});