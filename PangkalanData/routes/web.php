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
Route::view('/validator/index', 'VALIDATOR.index');
