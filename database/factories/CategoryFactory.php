<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
   
   $title = $faker->sentence();
    return [
        //
        "title"=> $title,
        "slug"=> Str::slug($title),
        "description"=>$faker->paragraph,
        "image"=>$faker->imageUrl($width =640,$height=480),



    ];
});
