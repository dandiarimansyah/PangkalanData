<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ValidatorController;
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
Route::view('login', 'login');
// Route::view('login', 'login2');
// Route::view('login', 'login3');
Route::post('proses_login', [AuthController::class, 'proses_login']);

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
});

//MenuController
Route::get('/media', [MenuController::class, 'media']);
Route::get('/laporan', [MenuController::class, 'laporan']);
Route::get('/grafik', [MenuController::class, 'grafik']);
Route::get('/forum', [MenuController::class, 'forum']);

//OPERATOR
Route::group(['middleware' => ['AkunLoginMiddleware:operator']], function () {
    Route::get('/operator/input', [OperatorController::class, 'input']);
    Route::get('/operator/edit', [OperatorController::class, 'edit']);
});


//VALIDATOR
Route::group(['middleware' => ['AkunLoginMiddleware:validator']], function () {
    //INDEX
    Route::get('/validator/validasi', [ValidatorController::class, 'validasi']);
    //VALIDATOR KATEGORI A
    Route::get('/validator/sekretariat/a1', [ValidatorController::class, 'a1']);
    Route::get('/validator/sekretariat/a2', [ValidatorController::class, 'a2']);
    Route::get('/validator/sekretariat/a3', [ValidatorController::class, 'a3']);
    Route::get('/validator/sekretariat/a4', [ValidatorController::class, 'a4']);
    Route::get('/validator/sekretariat/a5', [ValidatorController::class, 'a5']);
    Route::get('/validator/sekretariat/a6', [ValidatorController::class, 'a6']);
    Route::get('/validator/sekretariat/a7', [ValidatorController::class, 'a7']);
    //VALIDATOR KATEGORI B
    Route::get('/validator/kebahasaan/b1', [ValidatorController::class, 'b1']);
    Route::get('/validator/kebahasaan/b2', [ValidatorController::class, 'b2']);
    Route::get('/validator/kebahasaan/b3', [ValidatorController::class, 'b3']);
    Route::get('/validator/kebahasaan/b4', [ValidatorController::class, 'b4']);
    Route::get('/validator/kebahasaan/b5', [ValidatorController::class, 'b5']);
    Route::get('/validator/kebahasaan/b6', [ValidatorController::class, 'b6']);
    Route::get('/validator/kebahasaan/b7', [ValidatorController::class, 'b7']);
    Route::get('/validator/kebahasaan/b8', [ValidatorController::class, 'b8']);
    //VALIDATOR KATEGORI C
    Route::get('/validator/kesastraan/c1', [ValidatorController::class, 'c1']);
    Route::get('/validator/kesastraan/c2', [ValidatorController::class, 'c2']);
    Route::get('/validator/kesastraan/c3', [ValidatorController::class, 'c3']);
    Route::get('/validator/kesastraan/c4', [ValidatorController::class, 'c4']);
    //VALIDATOR KATEGORI D
    Route::get('/validator/komunitas/d1', [ValidatorController::class, 'd1']);
    Route::get('/validator/komunitas/d2', [ValidatorController::class, 'd2']);
    //VALIDATOR KATEGORI E
    Route::get('/validator/penelitian/e1', [ValidatorController::class, 'e1']);
});