<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    static $password;

    return [
      'name' => $faker -> name,
      'username' => $faker -> unique() -> username,
      'password' => $password?:$password = bcrypt('secret'),
      'remember_token' => str_random(10),
      'created_at' => $date_time,
      'updated_at' => $date_time,
    ];
});
