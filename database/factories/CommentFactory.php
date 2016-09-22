<?php
$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'comment' => $faker->paragraph,
        'from' => function () {
            return factory(App\Models\User::class)->create()->id;
        }
    ];
});