<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Order::class, function (Faker $faker) {
    $array = ['deposito','efectivo'];
    $random = Arr::random($array);
    return [
         'name'=>$faker->word,
         'start_date'=>$faker->dateTimeBetween('-1 week'),
         'end_date'=>$faker->dateTime(),
         'payment_type'=> $random,
         'total_amount'=>$faker->randomFloat(2)

    ];
});
