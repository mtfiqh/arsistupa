<?php

use Illuminate\Database\Seeder;



class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //find user with id 1 (admin)
        $user=app\User::find(1);
        // sync with roles
        $user->roles()->sync([1,2,3]);

    }
}
