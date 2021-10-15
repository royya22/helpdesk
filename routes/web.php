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
    return view('index');
});

Route::get('laporan','LaporanController@index');
Route::get('create-laporan','LaporanController@create');

Route::get('login','DashboardController@login');
Route::get('dashboard','DashboardController@index');

Route::get('open','TiketController@open');
Route::get('pending','TiketController@pending');
Route::get('close','TiketController@close');
Route::get('close-detail','TiketController@close_detail');

Route::get('insident','InsidenController@index');
Route::get('insident-detail','InsidenController@show');

Route::get('unit','UnitController@index');

Route::get('subjek','SubjekController@index');

Route::get('teknisi','TeknisiController@index');
Route::get('password','TeknisiController@ubah_password');