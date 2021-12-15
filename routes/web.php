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

use App\Http\Controllers\PegawaiController;

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

//route CRUD PEGAWAI
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
//cari pegawai
Route::get('/pegawai/cari','PegawaiController@cari');
//view detail pegawai
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD TUGAS Tabel Pendapatan
Route::get('/pendapatan',"PendapatanController@index");
//tambah data pendapatan
Route::get('/pendapatan/tambah','PendapatanController@tambah');
//setor data pendapatan
Route::post('/pendapatan/store','PendapatanController@store');
//edit data pendapatan
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
//update data pendapatan
Route::post('/pendapatan/update','PendapatanController@update');
//hapus data pendapatan
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD TUGAS PRAKTIKUM
Route::get('/bagian','BagianController@indexbagian');
Route::get('/bagian/add','BagianController@add');
Route::post('/bagian/store','BagianController@store');
Route::get('/bagian/edit/{id}','BagianController@edit');
Route::post('/bagian/update','BagianController@update');
Route::get('/bagian/hapus/{id}','BagianController@hapus');
Route::get('/bagian/view/{id}','BagianController@detail');
Route::get('/bagian/cari','BagianController@cari');

//UAS CRUD Keranjang Belanja
Route::get('/keranjangbelanja','BelanjaController@index');
Route::get('/keranjangbelanja/add','BelanjaController@add');
Route::post('/keranjangbelanja/store','BelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','BelanjaController@hapus');
