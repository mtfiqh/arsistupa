<?php

use Illuminate\Database\Seeder;

class DatauserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create to table datauser
        $datauser = new App\Datauser;
        $datauser->name = "Admin arsitektur";
        $datauser->save();

        $user=App\User::find(1);
        $datauser=App\Datauser::find(1);
        $datauser->user()->associate($user);
        $datauser->save();
    }
}
