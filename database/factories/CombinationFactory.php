<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Combination;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Combination::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'code' => Str::random(10),
        'network_id' => rand(1,3),
    ];
});
