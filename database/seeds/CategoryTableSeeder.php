<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'Đồ Ăn', 'parent_id' => NULL],
            ['name' => 'Thức uống', 'parent_id' => NULL],
            ['name' => 'Bánh ngọt', 'parent_id' => '1'],
            ['name' => 'Đồ ăn vặt', 'parent_id' => '1'],
            ['name' => 'Chè', 'parent_id' => '1'],
            ['name' => 'Pizza/Burger', 'parent_id' => '1'],
            ['name' => 'Món ốc', 'parent_id' => '1'],
            ['name' => 'Món nướng', 'parent_id' => '1'],
            ['name' => 'Nước ngọt', 'parent_id' => '2'],
            ['name' => 'Nước ép', 'parent_id' => '2'],
            ['name' => 'Trà sữa', 'parent_id' => '2'],
            ['name' => 'Thức uống khác', 'parent_id' => '2'],
        ]);
    }
}
