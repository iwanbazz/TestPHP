<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Discount;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Discount::class, function (Faker $faker) {
    return [
        'discount_code' => strtoupper(Str::random(6)),
        'discount_percentage' => rand(1, 15)
    ];
});
