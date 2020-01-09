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
    //return view('welcome');   //contoh buat ke controllers
    return view('layout.index');
});

Route::get('/home', function () {
    //return view('welcome');   //contoh buat ke controllers
    return view('layout.index');
});

Route::get('/about', function () {
    //return view('welcome');   //contoh buat ke controllers
    return view('layout.about');
});
// Route::get('/pegawai', 'PegawaiController@index');		//@ = fungsi.file | untuk routing ke url 'localhost:8000 --->/pegawai  <---'

// //ini untuk create
// Route::post('/pegawai/create', 'PegawaiController@create'); //post untuk melakukan perubahan data

// //untuk edit
/*Route::get('/karyawan/{id}/edit', 'KaryawanController@edit');*/ //get untuk menampilkan ke halaman baru
/*Route::post('/karyawan/{id}/update', 'KaryawanController@update');*/

// //untuk delete
// Route::get('/pegawai/{id}/delete', 'PegawaiController@delete');

Route::get('/login', 'AuthController@login');//->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('pegawai/exportpdf/', 'DataMobilController@exportpdf');
// Route::get('/data_mobil/show', 'DataMobilController@show');
// Route::get('/data_mobil/index', 'DataMobilController@index');
// Route::get('/home', 'DataMobilController@index');




Route::resource('data_mobil', 'DataMobilController');
// Route::resource('karyawan', 'KaryawanController');
// Route::get('data_mobil.create','DataMobilController@create');
// Route::post('data_mobil.store','DataMobilController@store');