<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->description = "An administrator";
        $admin->save();

        $doctor = new Role();
        $doctor->name = 'doctor';
        $doctor->description = "A doctor";
        $doctor->save();
    }
}
