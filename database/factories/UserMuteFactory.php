<?php
/**
 * Created by PhpStorm.
 * User: daseel
 * Date: 2016-09-18
 * Time: 23:04
 */
$factory->define(App\UserMute::class, function (Faker\Generator $faker) {

    return [
        'blocker' => function () {
            return factory(App\User::class)->create()->id;
        },
        'blockee' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});