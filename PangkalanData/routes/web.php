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
    return view('welcome');
});


//Sementara hanya return view dulu
Route::view('masuk', 'login');
Route::view('masuk2', 'login2');

Route::view('/media', 'media');
Route::view('/laporan', 'laporan');
Route::view('/grafik', 'grafik');
Route::view('/forum', 'forum');


//VALIDATOR
Route::view('/validator/validasi', 'VALIDATOR.validasi');

//OPERATOR
Route::view('/operator/input', 'OPERATOR.input');
Route::view('/operator/edit', 'OPERATOR.edit');
