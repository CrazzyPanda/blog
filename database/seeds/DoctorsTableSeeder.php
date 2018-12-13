<?php

use Illuminate\Database\Seeder;
use App\Doctor;
use App\User;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','anne@gmail.com')->first();

        $doctor = new Doctor();
        $doctor->address = '4 Blue Street';
        $doctor->phone = '1123456789';
        $doctor->startDate = '2018-11-26';
        $doctor->user_id = $user->id;
        $doctor->save();
    }
}
