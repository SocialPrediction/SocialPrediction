<?php
/**
 * Created by PhpStorm.
 * User: daseel
 * Date: 2016-09-18
 * Time: 23:04
 */
$factory->define(App\Models\Choice::class, function (Faker\Generator $faker) {

    return [
        'user' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'alternative' => function () {
            return factory(App\Models\Alternative::class)->create()->id;
        },
    ];
});