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
Route::view('/laporan/sekretariat/la1', 'LAPORAN.SEKRETARIAT.la1');
Route::view('/laporan/sekretariat/la2', 'LAPORAN.SEKRETARIAT.la2');
Route::view('/laporan/sekretariat/la3', 'LAPORAN.SEKRETARIAT.la3');
Route::view('/laporan/sekretariat/la4', 'LAPORAN.SEKRETARIAT.la4');
Route::view('/laporan/sekretariat/la5', 'LAPORAN.SEKRETARIAT.la5');
Route::view('/laporan/sekretariat/la6', 'LAPORAN.SEKRETARIAT.la6');
Route::view('/laporan/sekretariat/la7', 'LAPORAN.SEKRETARIAT.la7');
//LAPORAN S 2
Route::view('/laporan/kebahasaan/lb1', 'LAPORAN.KEBAHASAAN.lb1');
Route::view('/laporan/kebahasaan/lb2', 'LAPORAN.KEBAHASAAN.lb2');
Route::view('/laporan/kebahasaan/lb3', 'LAPORAN.KEBAHASAAN.lb3');
Route::view('/laporan/kebahasaan/lb4', 'LAPORAN.KEBAHASAAN.lb4');
Route::view('/laporan/kebahasaan/lb5', 'LAPORAN.KEBAHASAAN.lb5');
Route::view('/laporan/kebahasaan/lb6', 'LAPORAN.KEBAHASAAN.lb6');
Route::view('/laporan/kebahasaan/lb7', 'LAPORAN.KEBAHASAAN.lb7');
Route::view('/laporan/kebahasaan/lb8', 'LAPORAN.KEBAHASAAN.lb8');
//LAPORAN S 3
Route::view('/laporan/kesastraan/lc1', 'LAPORAN.KESASTRAAN.lc1');
Route::view('/laporan/kesastraan/lc2', 'LAPORAN.KESASTRAAN.lc2');
Route::view('/laporan/kesastraan/lc3', 'LAPORAN.KESASTRAAN.lc3');
Route::view('/laporan/kesastraan/lc4', 'LAPORAN.KESASTRAAN.lc4');
//LAPORAN S 4
Route::view('/laporan/komunitas/ld1', 'LAPORAN.KOMUNITAS.ld1');
Route::view('/laporan/komunitas/ld2', 'LAPORAN.KOMUNITAS.ld2');
//LAPORAN S 5
Route::view('/laporan/penelitian/le1', 'LAPORAN.PENELITIAN.le1');

////========================================== GRAFIK ===================
//GRAFIK S 1
Route::view('/grafik/sekretariat/ga1', 'GRAFIK.SEKRETARIAT.ga1');
Route::view('/grafik/sekretariat/ga2', 'GRAFIK.SEKRETARIAT.ga2');
Route::view('/grafik/sekretariat/ga3', 'GRAFIK.SEKRETARIAT.ga3');
Route::view('/grafik/sekretariat/ga4', 'GRAFIK.SEKRETARIAT.ga4');
//GRAFIK S 2
Route::view('/grafik/kebahasaan/gb1', 'GRAFIK.KEBAHASAAN.gb1');
Route::view('/grafik/kebahasaan/gb2', 'GRAFIK.KEBAHASAAN.gb2');
Route::view('/grafik/kebahasaan/gb3', 'GRAFIK.KEBAHASAAN.gb3');
Route::view('/grafik/kebahasaan/gb4', 'GRAFIK.KEBAHASAAN.gb4');
//GRAFIK S 3
Route::view('/grafik/kesastraan/gc1', 'GRAFIK.KESASTRAAN.gc1');
//GRAFIK S 4
Route::view('/grafik/komunitas/gd1', 'GRAFIK.KOMUNITAS.gd1');
//GRAFIK S 5
Route::view('/grafik/penelitian/ge1', 'GRAFIK.PENELITIAN.ge1');
