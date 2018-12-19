<?php

use Illuminate\Database\Seeder;
use Food\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
                        ['name' => 'admin'],
                        ['name' => 'user']
                    );

        foreach ($roles as $value) {
            Role::create($value);
        }
    }
}
