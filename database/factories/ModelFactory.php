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
        
			'reference_id' => $reference_id, // '609',
			'sex' => $sex,
			'firstName' => $test,
			'lastName' => $faker->lastName,
        'firstName' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'reference_id' => $faker->randomDigit(10),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
