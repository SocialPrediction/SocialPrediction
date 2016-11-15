<?php
$factory->define(App\Models\BetComment::class, function (Faker\Generator $faker) {

    return [
        'bet' => function () {
            return factory(App\Models\Bet::class)->create()-id;
        },
        'bet_comment' => function () {
            return factory(App\Models\Comment::class)->create()->id;
        }
    ];
});