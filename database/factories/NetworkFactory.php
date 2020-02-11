<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Network;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Network::class, function (Faker $faker) {
    return [
        'name' =>  $faker->title,
        'type' => rand(0,1),
    ];
});
