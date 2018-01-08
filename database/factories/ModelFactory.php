<?php

use App\NulisticeEvent;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(NulisticeEvent::class, function (Faker\Generator $faker) {

    return [
        'title' => "NULISTICE.III.1: ENTREPRENEURSHIP AND INFORMATION TECHNOLOGY",
        'room' => "MACHACHE",
        'body' => $faker->paragraph,
        'time' => $faker->word,
    ];
});
$factory->define(NulisticeEvent::class, function (Faker\Generator $faker) {

    return [
        'title' => "RERIS.II.2: DECENTRALISED RENEWABLE AND HOUSEHOLD ENERGY SOLUTIONS II",
        'room' => "PHUTHIATSANA 2",
        'body' => $faker->paragraph,
        'time' => $faker->word,
    ];
});
