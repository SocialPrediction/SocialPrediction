<?php

$factory->define(App\Bet::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'upvoteScore' => $faker->numberBetween(-100, 500),
        'finishes' => $faker->dateTimeThisYear,
        'type' => function () {
            return factory(App\BetType::class)->create()->id;
        },
        'result' => function () {
            if (rand(0, 10) % 2)
                return null;

            return factory(App\Alternative::class)->create()->id;
        },
        'category' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'owner' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});