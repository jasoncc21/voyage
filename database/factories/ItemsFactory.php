<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

// $faker = Faker\Factory::create('zh_TW');

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'price' => $faker->numberBetween(100, 1000),
    ];
});
