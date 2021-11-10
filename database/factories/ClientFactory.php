<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
    'first_name'=> $faker->firstName,
    'last_name' => $faker->lastName,
    'phone_number'=> $faker->phoneNumber,
    'street_number'=> $faker->randomNumber(5,true),
    'street_name'=> $faker->streetName,
    ];
});
