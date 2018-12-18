<?php

use Faker\Generator as Faker;
use App\Image;
use App\Product;
$factory->define(Image::class, function (Faker $faker) {
	$productIds= Product::pluck('id');
    return [
        'name'=>$faker->name,
        'path'=>$faker->image,
        'product_id'=>$faker->randomElement($productIds),
    ];
});
