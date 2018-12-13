<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/doctor/home', 'Doctor\HomeController@index')->name('doctor.home');

Route::resource('admin/patients', 'Admin\PatientController', array("as"=>"admin"));
Route::resource('admin/doctors', 'Admin\DoctorController', array("as"=>"admin"));
Route::resource('doctor/patients', 'Doctor\PatientController', array("as"=>"doctor"));


// Route::get('/admin/patients/index', 'Admin\PatientController@index')->name('admin.patients.index');
// Route::get('/admin/doctors/index', 'Admin\DoctorController@index')->name('admin.doctors.index');
// Route::get('/doctor/patients/index', 'Doctor\PatientController@index')->name('doctor.patients.index');
//
// Route::get('/admin/patients/show/{patient}', 'Admin\PatientController@show')->name('admin.patients.show');
// Route::get('/admin/doctors/show/{doctor}', 'Admin\DoctorController@show')->name('admin.doctors.show');
//
// Route::get('/admin/patients/create', 'Admin\PatientController@create')->name('admin.patients.create');
