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
    return view('dashboard');
});

Route::resource('datawaralaba','DataWaralabaController'); //resource untuk langsung membuat crud url
Route::resource('bobot','BobotController'); //resource untuk langsung membuat crud url
Route::resource('attribut','AttributController'); //resource untuk langsung membuat crud url
Route::resource('nilaiattribut','NilaiAttributController'); //resource untuk langsung membuat crud url
Route::resource('normalisasi', 'NormalisasiController');