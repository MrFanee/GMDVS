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

// Route::get('/', function () {
//     return view('welcome_login');
// });

Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate')->name('login_store');
Route::get('/logout', 'LoginController@logout')->name('logout');

// dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// input
Route::get('/input/keberangkatan', 'InputController@keberangkatan')->name('input.keberangkatan');
Route::get('/input/kedatangan', 'InputController@kedatangan')->name('input.kedatangan');

// master pic
Route::get('/master/pic', 'MasterController@pic')->name('master.pic');
Route::get('/master/pic/datatables', 'MasterController@picDatatables')->name('master.pic.datatables');
// master kendaraan
Route::get('/master/kendaraan', 'MasterController@kendaraan')->name('master.kendaraan');
Route::get('/master/kendaraan/datatables', 'MasterController@vehicleDatatables')->name('master.kendaraan.datatables');
// master jadwal
Route::get('/master/jadwal', 'MasterController@jadwal')->name('master.jadwal');

// report
Route::get('/report', 'ReportController@index')->name('report.index');
Route::get('/report/pic', 'ReportController@reportpic')->name('report.pic');
Route::get('/report/kendaraan', 'ReportController@reportkendaraan')->name('report.kendaraan');

