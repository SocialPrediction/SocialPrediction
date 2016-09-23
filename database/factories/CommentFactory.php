<?php
$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {

    return [
        'comment' => $faker->colorName,
        'from' => function () {
            return factory(App\Models\User::class)->create()->id;
        }
    ];
});