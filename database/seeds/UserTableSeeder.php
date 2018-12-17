<?php

use Illuminate\Database\Seeder;
use Food\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
                        ['first_name' => 'quang', 'last_name' => 'hieu', 'dob' => '1996-05-19', 'gender' => 1, 'email' => 'quanghieu123@gmail.com', 'password' => bcrypt('admin@123'), 'phone' => '0905111222', 'address' => '95 quang trung, đà nẵng', 'role_id' => 1, 'remember_token' => str_random(10)],
                        ['first_name' => 'thanh', 'last_name' => 'thuy', 'dob' => '1997-12-12', 'gender' => 2, 'email' => 'thanhthuy1997@gmail.com', 'password' => bcrypt('thanhthuy1997'), 'phone' => '090544433', 'address' => '76 đống đa, đà nẵng', 'role_id' => 2, 'remember_token' => str_random(10)],
                        ['first_name' => 'thanh', 'last_name' => 'thien', 'dob' => '1997-8-12', 'gender' => 2, 'email' => 'thanhthuy1997@gmail.com', 'password' => bcrypt('123456'), 'phone' => '090544433', 'address' => '76 đống đa, đà nẵng', 'role_id' => 1, 'remember_token' => str_random(10)]
                    );

        foreach ($users as $value) {
            User::create($value);
        }
    }
}
