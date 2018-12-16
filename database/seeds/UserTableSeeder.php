<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['first_name' => 'quang', 'last_name' => 'hieu', 'dob' => '1996-05-19', 'gender' => 'male', 'email' => 'quanghieu123@gmail.com', 'password' => bcrypt('admin@123'), 'phone' => '0905111222', 'address' => '95 quang trung, đà nẵng', 'role_id' => 1, 'remember_token' => str_random(10)],
            ['first_name' => 'thanh', 'last_name' => 'thuy', 'dob' => '1997-12-12', 'gender' => 'female', 'email' => 'thanhthuy1997@gmail.com', 'password' => bcrypt('thanhthuy1997'), 'phone' => '090544433', 'address' => '76 đống đa, đà nẵng', 'role_id' => 2, 'remember_token' => str_random(10)]
        ]);
    }
}
