<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = new Patient();
        $patient->name = 'Bob';
        $patient->address = '10 Green Drive';
        $patient->phone = '0123456789';
        $patient->email = 'Bob@gmail.com';
        $patient->insurance = false;
        $patient->save();

    }
}
