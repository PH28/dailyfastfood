<?php

use Illuminate\Database\Seeder;
use Food\Slide;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = array(
        				['name' => 'slide1', 'path' => '/public/images/slides/slide1.jpg'],
        				['name' => 'slide2', 'path' => '/public/images/slides/slide2.jpg'],
        				['name' => 'slide3', 'path' => '/public/images/slides/slide3.jpg'],
        				['name' => 'slide4', 'path' => '/public/images/slides/slide4.jpg'],
        			);

        foreach ($slides as $value) {
            Slide::create($value);
        }
    }
}
