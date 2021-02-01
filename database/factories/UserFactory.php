<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'     => \Illuminate\Support\Str::uuid(),
        'name_kana'                => $faker->firstName,
        'email'                 => $faker->lastName,
        'password'           => $faker->firstKanaName,
        'gender'                    => $faker->randomElement(['male', 'female']),
        'birthdate'                  => $faker->date(),
        'biography'                    => $faker->randomElement(['activated', 'deactivated']),
        'birthdate'                  => $faker->date(),
        'image'                  => $faker->date(),
        'url'                  => $faker->date(),
        'status'                  => $faker->date(),
        'last_login_at'              => factory(Custodian::class)->create()->id,
    ];
});
