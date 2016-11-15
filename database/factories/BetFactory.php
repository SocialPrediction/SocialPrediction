<?php

$factory->define(App\Models\Bet::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'upvoteScore' => $faker->numberBetween(-100, 500),
        'finishes' => $faker->dateTimeThisYear,
        'type' => function () {
            return factory(App\Models\BetType::class)->create()->id;
        },
        'result' => function () {
            if (rand(0, 10) % 2)
                return null;

            return factory(App\Models\Alternative::class)->create()->id;
        },
        'category' => function () {
            return factory(App\Models\Category::class)->create()->id;
        },
        'owner' => function () {
            return factory(App\Models\User::class)->create()->id;
        }
    ];
});