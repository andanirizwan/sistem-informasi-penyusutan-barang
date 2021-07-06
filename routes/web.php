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
    return view('auth.login');
});

Auth::routes();

Route::resource('barang', 'BarangController');
Route::post('/barang/filter', 'BarangController@filter');
Route::get('/laporan', 'BarangController@laporan');
Route::get('/penyusutan', 'BarangController@penyusutan');
Route::put('/laporan/{id}', 'BarangController@pelaporan');
Route::get('/home', 'HomeController@index')->name('home');
