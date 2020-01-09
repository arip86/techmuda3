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
    //return view('welcome');
    return view('/layout.front');
});

/*
//ini untuk routing
Route::get('/karyawan','KaryawanController@index');
//ini untuk create
Route::post('/karyawan/create','KaryawanController@create');
//ini untuk edit
Route::get('/karyawan/{id}/edit','KaryawanController@edit');
Route::post('/karyawan/{id}/update','KaryawanController@update');
Route::get('/karyawan/{id}/delete', 'KaryawanController@delete');
*/
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');
Route::group(['middleware' => 'auth'], function(){
Route::get('/karyawan/export/','KaryawanController@export');
Route::get('/karyawan/exportPdf/','KaryawanController@exportPdf');

	
Route::get('/home', function () {
    //return view('welcome');
    return view('/layouts/home');
	});
Route::get('/about', function () {
    //return view('welcome');
    return view('/layouts/about');
});

Route::resource('karyawan','KaryawanController');
Route::resource('posisi','PosisiController');
});