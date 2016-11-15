<?php
$factory->define(App\Models\BetAlternative::class, function (Faker\Generator $faker) {

    return [
        'alternative' => function () {
            return factory(App\Models\Alternative::class)->create()->id;
        },
        'bet' => function () {
            return factory(App\Models\Bet::class)->create()->id;
        },
    ];
});