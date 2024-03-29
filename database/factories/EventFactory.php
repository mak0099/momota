<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'vanue' => $faker->address,
    ];
});
