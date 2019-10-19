<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Concert;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Concert::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'date'  => Carbon::now()->addDays(rand(1, 60)),
        'venue' => $faker->city . ' Theatre',
        'venue_address'  => $faker->streetAddress,
        'city'  => $faker->city,
        'ticket_price'  => $faker->numberBetween(10, 100),
        'ticket_quantity'  => $faker->numberBetween(100, 10000),
    ];
});
