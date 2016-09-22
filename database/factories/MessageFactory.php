<?php
/**
 * Created by PhpStorm.
 * User: daseel
 * Date: 2016-09-18
 * Time: 23:04
 */
$factory->define(App\Models\Message::class, function (Faker\Generator $faker) {

    return [
        'to' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'from' => function () {
            return factory(App\Models\User::class)->create()->id;
        },

        'text' => $faker->paragraph
    ];
});