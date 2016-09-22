<?php
$factory->define(App\Reply::class, function (Faker\Generator $faker) {

    return [
        'comment' => function () {
            return factory(App\Comment::class)->create()->id;
        },
        'to' => function () {
            return factory(App\Comment::class)->create()->id;
        }
    ];
});