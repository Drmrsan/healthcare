<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        "first_name" => $faker->firstName,
        "last_name" => $faker->lastName,
        "jmbg" => $faker->numberBetween($min = 1609984820036, $max = 1709984820036),
        "social_number" => $faker->ssn,
        "doctor_id" 	=> 1
    ];
});
