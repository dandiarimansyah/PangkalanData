<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ValidatorController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\ForumController;

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

// Login
// Route::view('/login', 'login');
// Route::view('login', 'login2');
// Route::view('login', 'login3');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
});

Route::get('/', [GuestController::class, 'index']);


//MenuController
Route::get('/laporan', [MenuController::class, 'laporan']);
Route::get('/grafik', [MenuController::class, 'grafik']);
Route::get('/forum', [MenuController::class, 'forum']);

Route::group(['middleware' => ['auth']], function () {
    //GUEST
    Route::get('/media', [MenuController::class, 'media']);

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
});


////========================================== MEDIA ===================
//MEDIA S 1
Route::get('/media/sekretariat/ma1', [MediaController::class, 'ma1']);
Route::get('/media/sekretariat/ma2', [MediaController::class, 'ma2']);
//MEDIA S 2
Route::get('/media/kebahasaan/mb1', [MediaController::class, 'mb1']);
Route::get('/media/kebahasaan/mb2', [MediaController::class, 'mb2']);
Route::get('/media/kebahasaan/mb3', [MediaController::class, 'mb3']);
Route::get('/media/kebahasaan/mb4', [MediaController::class, 'mb4']);
Route::get('/media/kebahasaan/mb5', [MediaController::class, 'mb5']);
Route::get('/media/kebahasaan/mb6', [MediaController::class, 'mb6']);
Route::get('/media/kebahasaan/mb7', [MediaController::class, 'mb7']);
//MEDIA S 3
Route::get('/media/kesastraan/mc1', [MediaController::class, 'mc1']);
Route::get('/media/kesastraan/mc2', [MediaController::class, 'mc2']);
Route::get('/media/kesastraan/mc3', [MediaController::class, 'mc3']);
Route::get('/media/kesastraan/mc4', [MediaController::class, 'mc4']);
//MEDIA S 5
Route::get('/media/penelitian/me1', [MediaController::class, 'me1']);

////========================================== LAPORAN ===================
//LAPORAN S 1
Route::get('/laporan/sekretariat/la1', [LaporanController::class, 'la1']);
Route::get('/laporan/sekretariat/la2', [LaporanController::class, 'la2']);
Route::get('/laporan/sekretariat/la3', [LaporanController::class, 'la3']);
Route::get('/laporan/sekretariat/la4', [LaporanController::class, 'la4']);
Route::get('/laporan/sekretariat/la5', [LaporanController::class, 'la5']);
Route::get('/laporan/sekretariat/la6', [LaporanController::class, 'la6']);
Route::get('/laporan/sekretariat/la7', [LaporanController::class, 'la7']);
//LAPORAN S 2
Route::get('/laporan/kebahasaan/lb1', [LaporanController::class, 'lb1']);
Route::get('/laporan/kebahasaan/lb2', [LaporanController::class, 'lb2']);
Route::get('/laporan/kebahasaan/lb3', [LaporanController::class, 'lb3']);
Route::get('/laporan/kebahasaan/lb4', [LaporanController::class, 'lb4']);
Route::get('/laporan/kebahasaan/lb5', [LaporanController::class, 'lb5']);
Route::get('/laporan/kebahasaan/lb6', [LaporanController::class, 'lb6']);
Route::get('/laporan/kebahasaan/lb7', [LaporanController::class, 'lb7']);
Route::get('/laporan/kebahasaan/lb8', [LaporanController::class, 'lb8']);
//LAPORAN S 3
Route::get('/laporan/kesastraan/lc1', [LaporanController::class, 'lc1']);
Route::get('/laporan/kesastraan/lc2', [LaporanController::class, 'lc2']);
Route::get('/laporan/kesastraan/lc3', [LaporanController::class, 'lc3']);
Route::get('/laporan/kesastraan/lc4', [LaporanController::class, 'lc4']);
//LAPORAN S 4
Route::get('/laporan/komunitas/ld1', [LaporanController::class, 'ld1']);
Route::get('/laporan/komunitas/ld2', [LaporanController::class, 'ld2']);
//LAPORAN S 5
Route::get('/laporan/penelitian/le1', [LaporanController::class, 'le1']);

////========================================== GRAFIK ===================
//GRAFIK S 1
Route::get('/grafik/sekretariat/ga1', [GrafikController::class, 'ga1']);
Route::get('/grafik/sekretariat/ga2', [GrafikController::class, 'ga2']);
Route::get('/grafik/sekretariat/ga3', [GrafikController::class, 'ga3']);
Route::get('/grafik/sekretariat/ga4', [GrafikController::class, 'ga4']);
//GRAFIK S 2
Route::get('/grafik/kebahasaan/gb1', [GrafikController::class, 'gb1']);
Route::get('/grafik/kebahasaan/gb2', [GrafikController::class, 'gb2']);
Route::get('/grafik/kebahasaan/gb3', [GrafikController::class, 'gb3']);
Route::get('/grafik/kebahasaan/gb4', [GrafikController::class, 'gb4']);
//GRAFIK S 3
Route::get('/grafik/kesastraan/gc1', [GrafikController::class, 'gc1']);
//GRAFIK S 4
Route::get('/grafik/komunitas/gd1', [GrafikController::class, 'gd1']);
//GRAFIK S 5
Route::get('/grafik/penelitian/ge1', [GrafikController::class, 'ge1']);