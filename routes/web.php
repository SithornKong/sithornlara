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
    return view('layout.main');
});

Route::get('/appointment', function () {
    return view('appointment.index');
});

Route::get('/report', function () {
    return view('report.index');
});


Route::get('/patient', 'PatientController@index');
Route::get('/patient/add/{id?}', 'PatientController@add');
Route::post('/patient/save', 'PatientController@save');
Route::get('/patient/delete/{id}', 'PatientController@delete');

Route::get('/treatment', 'TreatmentController@index');
Route::get('/treatment/treat/{id?}', 'TreatmentController@treat');
Route::post('/treatment/save', 'TreatmentController@save');
Route::get('/treatment/delete/{id}', 'TreatmentController@delete');


Route::get('/diagnosis', 'DiagnosisController@index');
Route::get('/diagnosis/add/{id?}', 'DiagnosisController@add');
Route::post('/diagnosis/save', 'DiagnosisController@save');
Route::get('/diagnosis/delete/{id}', 'DiagnosisController@delete');

Route::get('/symptom', 'SymptomController@index');
Route::get('/symptom/add/{id?}', 'SymptomController@add');
Route::post('/symptom/save', 'SymptomController@save');
Route::get('/symptom/delete/{id}', 'SymptomController@delete');

Route::get('/regiment', 'RegimentController@index');
Route::get('/regiment/add/{id?}', 'RegimentController@add');
Route::post('/regiment/save', 'RegimentController@save');
Route::get('/regiment/delete/{id}', 'RegimentController@delete');

Route::get('/doctor', 'DoctorController@index');
Route::get('/doctor/add/{id?}', 'DoctorController@add');
Route::post('/doctor/save', 'DoctorController@save');
Route::get('/doctor/delete/{id}', 'DoctorController@delete');