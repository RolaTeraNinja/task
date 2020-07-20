<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

 
// Admin routes login
Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/logout', 'Admin\Auth\AdminLoginController@logout')->name('admin.logout');
 
});
 
// Doctor routes login
Route::prefix('doctor')->group(function(){
    Route::get('/', 'Doctor\DoctorController@index')->name('doctor.dashboard');
    Route::get('/login', 'Doctor\Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
    Route::post('/login', 'Doctor\Auth\DoctorLoginController@login')->name('doctor.login.submit');

    Route::get('/logout', 'Doctor\Auth\DoctorLoginController@logout')->name('doctor.logout');
    
});

// Patient routes login
Route::prefix('patient')->group(function(){
    Route::get('/', 'Patient\PatientController@index')->name('patient.dashboard');
    Route::get('/login', 'Patient\Auth\PatientLoginController@showLoginForm')->name('patient.login');
    Route::post('/login', 'Patient\Auth\PatientLoginController@login')->name('patient.login.submit');

    Route::get('/logout', 'Patient\Auth\PatientLoginController@logout')->name('patient.logout');
    
});

Route::get('/services', 'AddServices\ServiceController@index');
Route::post('/service', 'AddServices\ServiceController@create');
Route::get('/service/{id}', 'AddServices\ServiceController@read')->name('edit.service');
Route::put('/service/{id}', 'AddServices\ServiceController@update')->name('update.service');
Route::delete('/service/{id}', 'AddServices\ServiceController@delete')->name('destroy.service');



Route::get('/doctorservices', 'DoctorService\DoctorServiceController@index');
Route::post('/doctorservices/doctorservice', 'DoctorService\DoctorServiceController@create');
Route::get('/doctorservices/doctorservice/{id}', 'DoctorService\DoctorServiceController@read')->name('edit.doctorservice');
Route::put('/doctorservices/doctorservice/{id}', 'DoctorService\DoctorServiceController@update')->name('update.doctorservice');
Route::delete('/doctorservices/doctorservice/{id}', 'DoctorService\DoctorServiceController@delete')->name('destroy.doctorservice');