<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Call;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Call::class, function (Faker $faker) {
    return [
        'time_to_call' => now(),
        'combination_id' => rand(1,10),
        'incoming_number' => $faker->unique()->phoneNumber,
        'receiving_number' => $faker->unique()->phoneNumber,
        'status' => $r = rand(0,1),
        'profit' => $r ? Str::random(10) : '',
    ];
});
