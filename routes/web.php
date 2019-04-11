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

// Route::get('/', function () {
//     return view('dashboard','DashboardController');
// });
Route::get('/','DashboardController@index');
Route::get('about','DashboardController@about');
Route::resource('datawaralaba','DataWaralabaController'); //resource untuk langsung membuat crud url
Route::resource('bobot','BobotController'); //resource untuk langsung membuat crud url
Route::resource('attribut','AttributController'); //resource untuk langsung membuat crud url
Route::resource('nilaiutility', 'NilaiUtilityController');
Route::get('test', 'DataWaralabaController@dataUtility');
Route::get('result', 'NilaiUtilityController@finalResultView');

for ($i=0; $i <= 48; $i++) { 
    Route::get('api/getData' . $i, 'ApiController@getData' . $i);    
}