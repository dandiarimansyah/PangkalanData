<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OperatorController;
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

//Sementara hanya return view dulu
// Route::view('login', 'login');
Route::view('login', 'login2');
// Route::view('login', 'login3');
Route::post('proses_login', [AuthController::class, 'proses_login']);

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
});

Route::view('/media', 'media');
Route::view('/laporan', 'laporan');
Route::view('/grafik', 'grafik');
Route::view('/forum', 'forum');

//OPERATOR
Route::group(['middleware' => ['AkunLoginMiddleware:operator']], function () {
    Route::get('/operator/input', [OperatorController::class, 'input']);
    Route::get('/operator/edit', [OperatorController::class, 'edit']);
});


//VALIDATOR
Route::group(['middleware' => ['AkunLoginMiddleware:validator']], function () {
});

//VALIDATOR
Route::view('/validator/validasi', 'VALIDATOR.validasi');

//VALIDATOR KATEGORI A
Route::view('/validator/sekretariat/a1', 'VALIDATOR.SEKRETARIAT.a1');
Route::view('/validator/sekretariat/a2', 'VALIDATOR.SEKRETARIAT.a2');
Route::view('/validator/sekretariat/a3', 'VALIDATOR.SEKRETARIAT.a3');
Route::view('/validator/sekretariat/a4', 'VALIDATOR.SEKRETARIAT.a4');
Route::view('/validator/sekretariat/a5', 'VALIDATOR.SEKRETARIAT.a5');
Route::view('/validator/sekretariat/a6', 'VALIDATOR.SEKRETARIAT.a6');
Route::view('/validator/sekretariat/a7', 'VALIDATOR.SEKRETARIAT.a7');

//VALIDATOR KATEGORI B
Route::view('/validator/kebahasaan/b1', 'VALIDATOR.KEBAHASAAN.b1');
Route::view('/validator/kebahasaan/b2', 'VALIDATOR.KEBAHASAAN.b2');
Route::view('/validator/kebahasaan/b3', 'VALIDATOR.KEBAHASAAN.b3');
Route::view('/validator/kebahasaan/b4', 'VALIDATOR.KEBAHASAAN.b4');
Route::view('/validator/kebahasaan/b5', 'VALIDATOR.KEBAHASAAN.b5');
Route::view('/validator/kebahasaan/b6', 'VALIDATOR.KEBAHASAAN.b6');
Route::view('/validator/kebahasaan/b7', 'VALIDATOR.KEBAHASAAN.b7');
Route::view('/validator/kebahasaan/b8', 'VALIDATOR.KEBAHASAAN.b8');

//VALIDATOR KATEGORI C
Route::view('/validator/kesastraan/c1', 'VALIDATOR.KESASTRAAN.c1');
Route::view('/validator/kesastraan/c2', 'VALIDATOR.KESASTRAAN.c2');
Route::view('/validator/kesastraan/c3', 'VALIDATOR.KESASTRAAN.c3');
Route::view('/validator/kesastraan/c4', 'VALIDATOR.KESASTRAAN.c4');

//VALIDATOR KATEGORI D
Route::view('/validator/komunitas/d1', 'VALIDATOR.KOMUNITAS.d1');
Route::view('/validator/komunitas/d2', 'VALIDATOR.KOMUNITAS.d2');

//VALIDATOR KATEGORI E
Route::view('/validator/penelitian/e1', 'VALIDATOR.PENELITIAN.e1');
