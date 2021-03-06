<?php

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
        'name' => 'Shin Hyun Jong',
        'email' => 'admin@gmail.com',
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Color::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->colorName,
        'desc' => $faker->name,
    ];
});
$factory->define(App\Idea::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'name' => $faker->name,
        'text' => $faker->text,
        'kind' => $faker->colorName,
    ];
});
$factory->define(App\Share::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'kind' => $faker->colorName,
        'text' => $faker->text,
    ];
});


