<?php

use Illuminate\Database\Seeder;
// import model "Role"
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert seed to Role as array
        $data=array(
            array("name"=>"Admin"),
            array("name"=>"Dosen"),
            array("name"=>"mahasiswa"),
        );
        Role::insert($data);
    }
}
