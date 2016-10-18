<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'content' => $faker->paragraphs($nb = 3, $asText = true),
        'url' => $faker->url,
        'created_by' => App\User::all()->random()->id,
    ];
});

$factory->define(App\Models\Vote::class, function (Faker\Generator $faker) {
    
    (mt_rand(0,3) == 0) ? $vote = 0 : $vote = 1;

    return [
        'post_id' => App\Models\Post::all()->random()->id,
        'user_id' => App\User::all()->unique()->random()->id,
        'vote' => $vote,
    ];
});