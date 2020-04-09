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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/beranda','BerandaController@index')->name('beranda');
Route::get('/layanan','LayananController@index')->name('layanan');

//Layanan Kesehatan
Route::get('/layanan/tambah', 'LayananController@create')->name('layanan.tambah');
Route::post('/layanan/store', 'LayananController@store')->name('layanan.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
