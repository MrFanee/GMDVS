<?php

use Faker\Guesser\Name;
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
    return view('welcome1');
});

// dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// input
Route::get('/input.keberangkatan', 'InputController@keberangkatan')->name('input.keberangkatan');
Route::get('/input.kedatangan', 'InputController@kedatangan')->name('input.kedatangan');

// master
Route::get('/master.pic', 'MasterController@pic')->name('master.pic');
Route::get('/master.kendaraan', 'MasterController@kendaraan')->name('master.kendaraan');
Route::get('/master.jadwal', 'MasterController@jadwal')->name('master.jadwal');

// report
Route::get('/report', 'ReportController@index')->name('report.index');
Route::get('/report.pic', 'ReportController@reportpic')->name('report.pic');
Route::get('/report.kendaraan', 'ReportController@reportkendaraan')->name('report.kendaraan');