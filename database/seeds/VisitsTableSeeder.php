<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Patient;
use App\Visit;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'anne@gmail.com')->first();
        $patient = Patient::where('email', 'Bob@gmail.com')->first();

        $visit = new Visit();
        $visit->duration = '00:30';
        $visit->cost = '60.00';
        $visit->visitDate = '2018-11-26';
        $visit->visitTime = '01:00';
        $visit->doctor_id = $user->doctor->id;
        $visit->patient_id = $patient->id;
        $visit->save();
    }
}
