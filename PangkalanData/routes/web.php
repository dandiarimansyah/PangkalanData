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
use App\Http\Controllers\InputController;
use App\Http\Controllers\EditController;

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
// Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'login2'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
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
        //INDEX OPERATOR
        Route::get('/operator/input', [OperatorController::class, 'input']);
        Route::get('/operator/edit', [OperatorController::class, 'edit']);

        //INPUT KATEGORI A
        Route::get('/operator/input/sekretariat/anggaran', [InputController::class, 'a1']);
        Route::get('/operator/input/sekretariat/realisasi_anggaran', [InputController::class, 'a2']);
        Route::get('/operator/input/sekretariat/kepegawaian', [InputController::class, 'a3']);
        Route::get('/operator/input/sekretariat/kerja_sama', [InputController::class, 'a4']);
        Route::get('/operator/input/sekretariat/tanah_dan_bangunan', [InputController::class, 'a5']);
        Route::get('/operator/input/sekretariat/perpustakaan', [InputController::class, 'a6']);
        Route::get('/operator/input/sekretariat/invetarisasi_bmn', [InputController::class, 'a7']);
        //INPUT KATEGORI B
        Route::get('/operator/input/kebahasaan/kamus_ensiklopedia', [InputController::class, 'b1']);
        Route::get('/operator/input/kebahasaan/jurnal_majalah', [InputController::class, 'b2']);
        Route::get('/operator/input/kebahasaan/terbitan_umum', [InputController::class, 'b3']);
        Route::get('/operator/input/kebahasaan/penyuluhan', [InputController::class, 'b4']);
        Route::get('/operator/input/kebahasaan/pesuluh', [InputController::class, 'b5']);
        Route::get('/operator/input/kebahasaan/penghargaan_bahasa', [InputController::class, 'b6']);
        Route::get('/operator/input/kebahasaan/duta_bahasa_nasional', [InputController::class, 'b7']);
        Route::get('/operator/input/kebahasaan/duta_bahasa_provinsi', [InputController::class, 'b8']);
        //INPUT KATEGORI C
        Route::get('/operator/input/kesastraan/bengkel_sastra_dan_bahasa', [InputController::class, 'c1']);
        Route::get('/operator/input/kesastraan/penghargaan_sastra', [InputController::class, 'c2']);
        Route::get('/operator/input/kesastraan/musikalisasi_puisi_nasional', [InputController::class, 'c3']);
        Route::get('/operator/input/kesastraan/musikalisasi_puisi_provinsi', [InputController::class, 'c4']);
        //INPUT KATEGORI D
        Route::get('/operator/input/komunitas/komunitas_bahasa', [InputController::class, 'd1']);
        Route::get('/operator/input/komunitas/komunitas_sastra', [InputController::class, 'd2']);
        //INPUT KATEGORI E
        Route::get('/operator/input/penelitian/penelitian', [InputController::class, 'e1']);

        //EDIT KATEGORI A
        Route::get('/operator/edit/sekretariat/anggaran', [EditController::class, 'a1']);
        Route::get('/operator/edit/sekretariat/realisasi_anggaran', [EditController::class, 'a2']);
        Route::get('/operator/edit/sekretariat/kepegawaian', [EditController::class, 'a3']);
        Route::get('/operator/edit/sekretariat/kerja_sama', [EditController::class, 'a4']);
        Route::get('/operator/edit/sekretariat/tanah_dan_bangunan', [EditController::class, 'a5']);
        Route::get('/operator/edit/sekretariat/perpustakaan', [EditController::class, 'a6']);
        Route::get('/operator/edit/sekretariat/invetarisasi_bmn', [EditController::class, 'a7']);
        //EDIT KATEGORI B
        Route::get('/operator/edit/kebahasaan/kamus_ensiklopedia', [EditController::class, 'b1']);
        Route::get('/operator/edit/kebahasaan/jurnal_majalah', [EditController::class, 'b2']);
        Route::get('/operator/edit/kebahasaan/terbitan_umum', [EditController::class, 'b3']);
        Route::get('/operator/edit/kebahasaan/penyuluhan', [EditController::class, 'b4']);
        Route::get('/operator/edit/kebahasaan/pesuluh', [EditController::class, 'b5']);
        Route::get('/operator/edit/kebahasaan/penghargaan_bahasa', [EditController::class, 'b6']);
        Route::get('/operator/edit/kebahasaan/duta_bahasa_nasional', [EditController::class, 'b7']);
        Route::get('/operator/edit/kebahasaan/duta_bahasa_provinsi', [EditController::class, 'b8']);
        //EDIT KATEGORI C
        Route::get('/operator/edit/kesastraan/bengkel_sastra_dan_bahasa', [EditController::class, 'c1']);
        Route::get('/operator/edit/kesastraan/penghargaan_sastra', [EditController::class, 'c2']);
        Route::get('/operator/edit/kesastraan/musikalisasi_puisi_nasional', [EditController::class, 'c3']);
        Route::get('/operator/edit/kesastraan/musikalisasi_puisi_provinsi', [EditController::class, 'c4']);
        //EDIT KATEGORI D
        Route::get('/operator/edit/komunitas/komunitas_bahasa', [EditController::class, 'd1']);
        Route::get('/operator/edit/komunitas/komunitas_sastra', [EditController::class, 'd2']);
        //EDIT KATEGORI E
        Route::get('/operator/edit/penelitian/penelitian', [EditController::class, 'e1']);
    });

    //VALIDATOR
    Route::group(['middleware' => ['AkunLoginMiddleware:validator']], function () {
        //INDEX
        Route::get('/validator/validasi', [ValidatorController::class, 'validasi']);
        //VALIDATOR KATEGORI A
        Route::get('/validator/sekretariat/anggaran', [ValidatorController::class, 'a1']);
        Route::get('/validator/sekretariat/realisasi_anggaran', [ValidatorController::class, 'a2']);
        Route::get('/validator/sekretariat/kepegawaian', [ValidatorController::class, 'a3']);
        Route::get('/validator/sekretariat/kerja_sama', [ValidatorController::class, 'a4']);
        Route::get('/validator/sekretariat/tanah_dan_bangunan', [ValidatorController::class, 'a5']);
        Route::get('/validator/sekretariat/perpustakaan', [ValidatorController::class, 'a6']);
        Route::get('/validator/sekretariat/invetarisasi_bmn', [ValidatorController::class, 'a7']);
        //VALIDATOR KATEGORI B
        Route::get('/validator/kebahasaan/kamus_ensiklopedia', [ValidatorController::class, 'b1']);
        Route::get('/validator/kebahasaan/jurnal_majalah', [ValidatorController::class, 'b2']);
        Route::get('/validator/kebahasaan/terbitan_umum', [ValidatorController::class, 'b3']);
        Route::get('/validator/kebahasaan/penyuluhan', [ValidatorController::class, 'b4']);
        Route::get('/validator/kebahasaan/pesuluh', [ValidatorController::class, 'b5']);
        Route::get('/validator/kebahasaan/penghargaan_bahasa', [ValidatorController::class, 'b6']);
        Route::get('/validator/kebahasaan/duta_bahasa_nasional', [ValidatorController::class, 'b7']);
        Route::get('/validator/kebahasaan/duta_bahasa_provinsi', [ValidatorController::class, 'b8']);
        //VALIDATOR KATEGORI C
        Route::get('/validator/kesastraan/bengkel_sastra_dan_bahasa', [ValidatorController::class, 'c1']);
        Route::get('/validator/kesastraan/penghargaan_sastra', [ValidatorController::class, 'c2']);
        Route::get('/validator/kesastraan/musikalisasi_puisi_nasional', [ValidatorController::class, 'c3']);
        Route::get('/validator/kesastraan/musikalisasi_puisi_provinsi', [ValidatorController::class, 'c4']);
        //VALIDATOR KATEGORI D
        Route::get('/validator/komunitas/komunitas_bahasa', [ValidatorController::class, 'd1']);
        Route::get('/validator/komunitas/komunitas_sastra', [ValidatorController::class, 'd2']);
        //VALIDATOR KATEGORI E
        Route::get('/validator/penelitian/penelitian', [ValidatorController::class, 'e1']);
    });
});


////========================================== MEDIA ===================
//MEDIA S 1
Route::get('/media/sekretariat/kerja_sama', [MediaController::class, 'ma1']);
Route::get('/media/sekretariat/tanah_dan_bangunan', [MediaController::class, 'ma2']);
//MEDIA S 2
Route::get('/media/kebahasaan/kamus_ensiklopedia', [MediaController::class, 'mb1']);
Route::get('/media/kebahasaan/jurnal_majalah', [MediaController::class, 'mb2']);
Route::get('/media/kebahasaan/terbitan_umum', [MediaController::class, 'mb3']);
Route::get('/media/kebahasaan/penyuluhan', [MediaController::class, 'mb4']);
Route::get('/media/kebahasaan/penghargaan_bahasa', [MediaController::class, 'mb5']);
Route::get('/media/kebahasaan/duta_bahasa_nasional', [MediaController::class, 'mb6']);
Route::get('/media/kebahasaan/duta_bahasa_provinsi', [MediaController::class, 'mb7']);
//MEDIA S 3
Route::get('/media/kesastraan/bengkel_sastra_dan_bahasa', [MediaController::class, 'mc1']);
Route::get('/media/kesastraan/penghargaan_sastra', [MediaController::class, 'mc2']);
Route::get('/media/kesastraan/musikalisasi_puisi_nasional', [MediaController::class, 'mc3']);
Route::get('/media/kesastraan/musikalisasi_puisi_provinsi', [MediaController::class, 'mc4']);
//MEDIA S 5
Route::get('/media/penelitian/penelitian', [MediaController::class, 'me1']);

////========================================== LAPORAN ===================
//LAPORAN S 1
Route::get('/laporan/sekretariat/anggaran', [LaporanController::class, 'la1']);
Route::get('/laporan/sekretariat/realisasi_anggaran', [LaporanController::class, 'la2']);
Route::get('/laporan/sekretariat/kepegawaian', [LaporanController::class, 'la3']);
Route::get('/laporan/sekretariat/kerja_sama', [LaporanController::class, 'la4']);
Route::get('/laporan/sekretariat/tanah_dan_bangunan', [LaporanController::class, 'la5']);
Route::get('/laporan/sekretariat/perpustakaan', [LaporanController::class, 'la6']);
Route::get('/laporan/sekretariat/invetarisasi_bmn', [LaporanController::class, 'la7']);
//LAPORAN S 2
Route::get('/laporan/kebahasaan/kamus_ensiklopedia', [LaporanController::class, 'lb1']);
Route::get('/laporan/kebahasaan/jurnal_umum', [LaporanController::class, 'lb2']);
Route::get('/laporan/kebahasaan/terbitan_umum', [LaporanController::class, 'lb3']);
Route::get('/laporan/kebahasaan/penyuluhan', [LaporanController::class, 'lb4']);
Route::get('/laporan/kebahasaan/pesuluh', [LaporanController::class, 'lb5']);
Route::get('/laporan/kebahasaan/penghargaan_nasional', [LaporanController::class, 'lb6']);
Route::get('/laporan/kebahasaan/duta_bahasa_nasional', [LaporanController::class, 'lb7']);
Route::get('/laporan/kebahasaan/duta_bahasa_provinsi', [LaporanController::class, 'lb8']);
//LAPORAN S 3
Route::get('/laporan/kesastraan/bengkel_sastra_dan_bahasa', [LaporanController::class, 'lc1']);
Route::get('/laporan/kesastraan/penghargaan_sastra', [LaporanController::class, 'lc2']);
Route::get('/laporan/kesastraan/musikalisasi_puisi_nasional', [LaporanController::class, 'lc3']);
Route::get('/laporan/kesastraan/musikalisasi_puisi_provinsi', [LaporanController::class, 'lc4']);
//LAPORAN S 4
Route::get('/laporan/komunitas/komunitas_bahasa', [LaporanController::class, 'ld1']);
Route::get('/laporan/komunitas/komunitas_sastra', [LaporanController::class, 'ld2']);
//LAPORAN S 5
Route::get('/laporan/penelitian/penelitian', [LaporanController::class, 'le1']);

////========================================== GRAFIK ===================
//GRAFIK S 1
Route::get('/grafik/sekretariat/anggaran', [GrafikController::class, 'ga1']);
Route::get('/grafik/sekretariat/kerja_sama', [GrafikController::class, 'ga2']);
Route::get('/grafik/sekretariat/tanah_dan_bangunan', [GrafikController::class, 'ga3']);
Route::get('/grafik/sekretariat/perpustakaan', [GrafikController::class, 'ga4']);
//GRAFIK S 2
Route::get('/grafik/kebahasaan/kamus_ensiklopedia', [GrafikController::class, 'gb1']);
Route::get('/grafik/kebahasaan/jurnal_majalah', [GrafikController::class, 'gb2']);
Route::get('/grafik/kebahasaan/terbitan_umum', [GrafikController::class, 'gb3']);
Route::get('/grafik/kebahasaan/penyuluhan', [GrafikController::class, 'gb4']);
//GRAFIK S 3
Route::get('/grafik/kesastraan/bengkel_sastra_dan_bahasa', [GrafikController::class, 'gc1']);
//GRAFIK S 4
Route::get('/grafik/komunitas/komunitas_bahasa_dan_sastra', [GrafikController::class, 'gd1']);
//GRAFIK S 5
Route::get('/grafik/penelitian/penelitian', [GrafikController::class, 'ge1']);
