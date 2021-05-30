<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker ->,
        'lastname' => $faker ->,
        'age' => $faker ->,
        'gender' => $faker ->,
        'days_off' => $faker ->,
    ];
});
