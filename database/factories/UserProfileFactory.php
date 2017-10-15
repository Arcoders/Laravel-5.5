<?php

use Faker\Generator as Faker;
use App\{UserProfile, User};

$factory->define(UserProfile::class, function (Faker $faker) {
    return [
        'bio' => $faker->paragraph,
        'twitter' => $faker->userName,
        'github' => $faker->userName,
        'user_id' => factory(User::class)
    ];
});
