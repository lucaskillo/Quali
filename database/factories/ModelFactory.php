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

require_once __DIR__ . '/documento.php';

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'departament' => 'Financeiro',
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Workshop::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'date' => $faker->date(),
    ];
});

$factory->define(App\Service::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});



