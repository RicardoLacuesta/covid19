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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MonitoringController@cases');

Route::group(['prefix' => 'covid19'], function() {
	Route::get('/', 'MonitoringController@index')->name('covid19.index');
	Route::get('/cases', 'MonitoringController@cases')->name('covid19.cases');
	Route::get('/cases/outside-ph', 'MonitoringController@casesOutsidePh')->name('covid19.casesOutsidePH');
});

