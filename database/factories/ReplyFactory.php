<?php
$factory->define(App\Models\Reply::class, function (Faker\Generator $faker) {

    return [
        'id' => function () {
            return factory(App\Models\Comment::class)->create()->id;
        },
        'to' => function () {
            return factory(App\Models\Comment::class)->create()->id;
        }
    ];
});