<?php
$factory->define(App\BetType::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'comment' => $faker->paragraph,
        'from' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});