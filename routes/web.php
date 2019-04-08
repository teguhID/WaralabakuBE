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

Route::post('api', 'ApiController@index');
Route::get('api/getData1', 'ApiController@getData1');
Route::get('api/getData2', 'ApiController@getData2');
Route::get('api/getData3', 'ApiController@getData3');
Route::get('api/getData4', 'ApiController@getData4');
Route::get('api/getData5', 'ApiController@getData5');
Route::get('api/getData6', 'ApiController@getData6');
Route::get('api/getData7', 'ApiController@getData7');
Route::get('api/getData8', 'ApiController@getData8');
Route::get('api/getData9', 'ApiController@getData9');
Route::get('api/getData10', 'ApiController@getData10');
Route::get('api/getData11', 'ApiController@getData11');
Route::get('api/getData12', 'ApiController@getData12');
Route::get('api/getData13', 'ApiController@getData13');
Route::get('api/getData14', 'ApiController@getData14');
Route::get('api/getData15', 'ApiController@getData15');
Route::get('api/getData16', 'ApiController@getData16');
Route::get('api/getData17', 'ApiController@getData17');
Route::get('api/getData18', 'ApiController@getData18');
Route::get('api/getData19', 'ApiController@getData19');
Route::get('api/getData20', 'ApiController@getData20');