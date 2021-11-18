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
// praktikum2
Route::get('praktikum2', function () {
    return view('prak2');
});
//tugas4
Route::get('tugas4', function () {
    return view('tgs4');
});
//tugas PHP
Route::get('smallnumfinder',"ViewController@showForm");
Route::post('smallnumres',"ViewController@smallnumRes");
// ETS
Route::get('formets', "viewController@etsForm");

//route CRUD
Route::get('/pegawai',"PegawaiController@index");
//tambah pegawai
Route::get('/pegawai/tambah','PegawaiController@tambah');
//setor pegawai
Route::post('/pegawai/store','PegawaiController@store');
//edit pegawai
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
//update pegawai
Route::post('/pegawai/update','PegawaiController@update');
//hapus pegawai
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
