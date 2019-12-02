<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        //'id' => $faker->randomDigitNot(1),
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true), 
        'description' => $faker->text($maxNbChars = 200)  ,
        'initial_date' => $faker->date(), 
        'ending_date' => $faker->date(),
        'price' => $faker->numberBetween(1,1000),
        'category_id' => $faker->numberBetween(1,6),
        'user_id' => 1,
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime()
    ];
});
