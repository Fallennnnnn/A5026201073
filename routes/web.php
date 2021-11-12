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


