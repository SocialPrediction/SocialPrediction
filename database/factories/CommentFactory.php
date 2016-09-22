<?php
$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'comment' => $faker->paragraph,
        'from' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});