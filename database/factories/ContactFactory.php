<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactModel;
use Faker\Generator as Faker;
use  App\User;

$factory->define(ContactModel::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'company' => $faker->company,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->email,
        'user_id' =>  function() {
            return User::all()->random();
        }
    ];
});
