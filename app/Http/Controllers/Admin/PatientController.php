<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('admin.patients.index')->with([
            'patients' => $patients
        ]);
    }


    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('admin.patients.show')->with(['patient' => $patient]);
    }


    public function create()
    {
        return view('admin.patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'address' => 'required|max:100',
            'phone' => 'required|max:100',
            'email' => 'required|max:100',
            'insurance' => 'nullable|boolean',
            'insuranceCompany' => 'nullable|required_if:insurance,1|max:100|nullable',
            'policyNumber' => 'nullable|required_if:insurance,1|max:100|nullable',
        ]);

        $p = new Patient();
        $p->name = $request->input('name');
        $p->address = $request->input('address');
        $p->phone = $request->input('phone');
        $p->email = $request->input('email');
        $p->insurance = $request->input('insurance', 0);
        $p->insuranceCompany = $request->input('insuranceCompany', null);
        $p->policyNumber = $request->input('policyNumber', null);
        $p->save();

        return redirect()->route('admin.patients.index');
    }










    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
