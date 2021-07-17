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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::POST('simpan-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');
Route::POST('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@destroy')->name('hapus.mahasiswa');

//makul
Route::get('makul', 'makulController@index')->name('makul');

Route::get('tambah-makul', 'makulController@create')->name('tambah.makul');

Route::POST('simpan-makul', 'makulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulController@edit')->name('edit.makul');
Route::POST('update-makul/{id}', 'makulController@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'makulController@destroy')->name('hapus.makul');

//nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-create', 'NilaiController@create')->name('nilai.create');
Route::POST('simpan-nilai', 'NilaiController@store')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('edit.nilai');
Route::POST('update-nilai/{id}', 'NilaiController@update')->name('update.nilai');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('hapus.nilai');