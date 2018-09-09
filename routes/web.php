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
})->middleware('guest');
Route::get('daftar', 'RegistrationController@index')->middleware('guest');

Route::post('daftar', 'RegistrationController@store');

Route::get('logout', "AuthController@destroy")->middleware('auth');

Route::get('masuk', 'AuthController@index')->middleware('guest')->name('login');

Route::post('masuk', 'AuthController@validasi');

Route::get('home','PegawaiController@index')->middleware('auth');

Route::get('obat', 'ObatController@index');