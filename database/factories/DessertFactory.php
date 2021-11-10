<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dessert;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Dessert::class, function (Faker $faker) {
    $array = ['cupcake','cake'];
    $random = Arr::random($array);
    return [
        'name'=>$faker->word,
        'flavor'=>$faker->word,
        'description'=>$faker->paragraph(2),
        'image_url'=>$faker->imageUrl,
        'portions'=>$faker->randomNumber,
        'price'=>$faker->randomFloat(2),
        'type'=>$random
    ];
});
