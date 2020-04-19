<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'parent_name' => $faker->name,
        'parent_phone' => $faker->e164PhoneNumber,
        'course_id' => 1
    ];
});
