<?php

use Faker\Generator as Faker;
use App\Category;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
	$categoryIds= Category::pluck('id');
    return [
        'name'=> $faker->name,
        'decription'=> $faker->paragraph,
        'price'=>rand(12000,90000),
        'category_id'=>$faker->randomElement($categoryIds),

    ];
});
