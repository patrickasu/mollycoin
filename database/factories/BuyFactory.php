<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Buy;
use Faker\Generator as Faker;

$factory->define(Buy::class, function (Faker $faker) {

    return [
        'amount' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
