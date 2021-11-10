<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(User::class, function (Faker $faker) {
    $array = ['hombre','mujer'];
    $random = Arr::random($array);
    return [
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'password'=>$faker->password,
        'email'=>$faker->email,
        'genere'=>$random,
        'age'=>$faker->randomNumber(2)
    ];
});
