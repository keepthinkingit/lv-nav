<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'email_verified_at' => now(),
        'remember_token' => str_random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Category::class, function ($faker) {
    return [
        'name' => $faker->unique()->word,
        'order' => $faker->unique()->numberBetween(1,10),
    ];
});

$factory->define(App\Type::class, function ($faker) {
    return [
        'name' => $faker->unique()->word,
        'category_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Site::class, function ($faker) {
    $title = $faker->sentence;

    return [
        'name' => $faker->unique()->word,
        'type_id' => $faker->numberBetween(1,14),
        'intro' => $title,
        'url' => $faker->url,
        'click' => $faker->numberBetween(1,100),
        'like' => $faker->numberBetween(3,300),
    ];
});
