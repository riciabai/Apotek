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
    $obat = App\Obat::All()->take(3);
    return view('welcome', compact('obat'));
})->middleware('guest');

Route::get('daftar', 'RegistrationController@index');

Route::post('daftar', 'RegistrationController@store');

Route::get('logout', "AuthController@destroy");

Route::get('masuk', 'AuthController@index')->name('login');

Route::post('masuk', 'AuthController@validasi');

Route::get('home','PegawaiController@index')->name('home');

/*--------------------------------------------------------------
Rute obat ex : localhost:8000/obat
--------------------------------------------------------------*/

Route::get('obat', 'ObatController@index');

Route::post('obat', 'ObatController@store');

Route::get('obat/edit/{obat}', 'ObatController@edit');

Route::post('obat/edit', 'ObatController@change');

Route::get('obat/hapus/{obat}', 'ObatController@destroy');

/*
Rute Supplier ex : localhost:8000/supplier
*/
Route::get('supplier', 'SupplierController@index');

Route::post('supplier', 'SupplierController@store');
