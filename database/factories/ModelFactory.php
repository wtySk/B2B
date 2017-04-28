<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may defcdine all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//factory('')
//factory(App\User::class,10000)->create()
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->sentence,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Role::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'remember_token' => str_random(10),
    ];
});

$factory->define(Modules\AdminProduct\Models\Product::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->name,
        'type' => $faker->name,
        'description' => $faker->name,
        'img_url' => $faker->imageUrl('640','480'),
    ];
});

$factory->define(Modules\AdminMovies\Models\Movies::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->title,
        'director' => $faker->name,
        'describe' => $faker->sentence,
        'rate' => rand(1,20),
        'released' => rand(0,1),
        'release_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'created_at' => $faker->dateTime,
    ];
});


$factory->define(Modules\Article\Models\Article::class, function (Faker\Generator $faker) {

    $key = ['游地方','游线路','游攻略','游生活'];
    return [
        'title' => $faker->title,
        'description' => $faker->sentence,
        'content' => $faker->sentence,
        'keyword' => $key[array_rand($key,1)],
        'hits' =>rand(0,500),
        'image_url' => $faker->imageUrl('300','200'),
        'video_url' => $faker->url,
        'wechat_link' => $faker->url,
        'order_id' => rand(0,100),
        'is_published' => rand(0,1),
        'is_deleted' => rand(0,1),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'deleted_at' => $faker->dateTime,
        'published_at' => $faker->dateTime,
    ];
});

