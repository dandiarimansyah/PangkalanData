<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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
use App\Http\Controllers\HapusController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ImportController;

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
    return redirect('/login');
});

// Login
// Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/beranda', [MenuController::class, 'beranda']);
    Route::get('/media', [MenuController::class, 'media']);
    Route::get('/laporan', [MenuController::class, 'laporan']);
    Route::get('/grafik', [MenuController::class, 'grafik']);
    Route::get('/forum', [MenuController::class, 'forum']);

    //UPDATE KATEGORI A
    Route::put('/operator/edit/sekretariat/anggaran/{id}', [EditController::class, 'update_a1']);
    Route::put('/operator/edit/sekretariat/realisasi_anggaran/{id}', [EditController::class, 'update_a2']);
    Route::put('/operator/edit/sekretariat/kepegawaian/{id}', [EditController::class, 'update_a3']);
    Route::put('/operator/edit/sekretariat/kerja_sama/{id}', [EditController::class, 'update_a4']);
    Route::put('/operator/edit/sekretariat/tanah_dan_bangunan/{id}', [EditController::class, 'update_a5']);
    Route::put('/operator/edit/sekretariat/perpustakaan/{id}', [EditController::class, 'update_a6']);
    Route::put('/operator/edit/sekretariat/inventarisasi_bmn/{id}', [EditController::class, 'update_a7']);
    //UPDATE KATEGORI B
    Route::put('/operator/edit/kebahasaan/kamus_ensiklopedia/{id}', [EditController::class, 'update_b1']);
    Route::put('/operator/edit/kebahasaan/jurnal_majalah/{id}', [EditController::class, 'update_b2']);
    Route::put('/operator/edit/kebahasaan/terbitan_umum/{id}', [EditController::class, 'update_b3']);
    Route::put('/operator/edit/kebahasaan/penyuluhan/{id}', [EditController::class, 'update_b4']);
    Route::put('/operator/edit/kebahasaan/pesuluh/{id}', [EditController::class, 'update_b5']);
    Route::put('/operator/edit/kebahasaan/penghargaan_bahasa/{id}', [EditController::class, 'update_b6']);
    Route::put('/operator/edit/kebahasaan/duta_bahasa_nasional/{id}', [EditController::class, 'update_b7']);
    Route::put('/operator/edit/kebahasaan/duta_bahasa_provinsi/{id}', [EditController::class, 'update_b8']);
    //UPDATE KATEGORI C
    Route::put('/operator/edit/kesastraan/bengkel_sastra_dan_bahasa/{id}', [EditController::class, 'update_c1']);
    Route::put('/operator/edit/kesastraan/penghargaan_sastra/{id}', [EditController::class, 'update_c2']);
    Route::put('/operator/edit/kesastraan/musikalisasi_puisi_nasional/{id}', [EditController::class, 'update_c3']);
    Route::put('/operator/edit/kesastraan/musikalisasi_puisi_provinsi/{id}', [EditController::class, 'update_c4']);
    //UPDATE KATEGORI D
    Route::put('/operator/edit/komunitas/komunitas_bahasa/{id}', [EditController::class, 'update_d1']);
    Route::put('/operator/edit/komunitas/komunitas_sastra/{id}', [EditController::class, 'update_d2']);
    //UPDATE KATEGORI E
    Route::put('/operator/edit/penelitian/penelitian/{id}', [EditController::class, 'update_e1']);

    //ADMIN
    Route::group(['middleware' => ['AkunLoginMiddleware:admin']], function () {
        Route::get('/admin/akun', [AdminController::class, 'akun']);

        ////========================================== KELOLA AKUN  ===================
        Route::put('/admin/edit_akun/{id}', [AdminController::class, 'update_akun']);
        //OPERATOR
        Route::get('/admin/akun_operator', [AdminController::class, 'su1']);
        Route::post('/admin/akun_operator', [AdminController::class, 'tambah_su1']);
        Route::get('/admin/akun_operator/hapus/{id}', [AdminController::class, 'hapus_su1']);

        //VALIDATOR
        Route::get('/admin/akun_validator', [AdminController::class, 'su2']);
        Route::post('/admin/akun_validator', [AdminController::class, 'tambah_su2']);
        Route::get('/admin/akun_validator/hapus/{id}', [AdminController::class, 'hapus_su2']);

        //TAMU
        Route::get('/admin/akun_tamu', [AdminController::class, 'su3']);
        Route::post('/admin/akun_tamu', [AdminController::class, 'tambah_su3']);
        Route::get('/admin/akun_tamu/hapus/{id}', [AdminController::class, 'hapus_su3']);

        ////========================================== KELOLA FOTO  ===================
        Route::get('/admin/kelola_foto', [AdminController::class, 'kelola_foto']);
        Route::post('/admin/kelola_foto/tambah_foto_login', [AdminController::class, 'tambah_foto_login']);
        Route::post('/admin/kelola_foto/tambah_foto_beranda', [AdminController::class, 'tambah_foto_beranda']);
        Route::post('/admin/kelola_foto/{id}', [AdminController::class, 'update_foto']);
        Route::get('/admin/kelola_foto/hapus/{id}', [AdminController::class, 'hapus_foto']);
    });

    //GUEST
    Route::group(['middleware' => ['AkunLoginMiddleware:tamu']], function () {
        Route::get('/data', [GuestController::class, 'index']);

        //DATA KATEGORI A
        Route::get('/data/sekretariat/anggaran', [GuestController::class, 'a1']);
        Route::get('/data/sekretariat/realisasi_anggaran', [GuestController::class, 'a2']);
        Route::get('/data/sekretariat/kepegawaian', [GuestController::class, 'a3']);
        Route::get('/data/sekretariat/kerja_sama', [GuestController::class, 'a4']);
        Route::get('/data/sekretariat/tanah_dan_bangunan', [GuestController::class, 'a5']);
        Route::get('/data/sekretariat/perpustakaan', [GuestController::class, 'a6']);
        Route::get('/data/sekretariat/inventarisasi_bmn', [GuestController::class, 'a7']);
        //DATA KATEGORI B
        Route::get('/data/kebahasaan/kamus_ensiklopedia ', [GuestController::class, 'b1']);
        Route::get('/data/kebahasaan/jurnal_majalah', [GuestController::class, 'b2']);
        Route::get('/data/kebahasaan/terbitan_umum', [GuestController::class, 'b3']);
        Route::get('/data/kebahasaan/penyuluhan', [GuestController::class, 'b4']);
        Route::get('/data/kebahasaan/pesuluh', [GuestController::class, 'b5']);
        Route::get('/data/kebahasaan/penghargaan_bahasa', [GuestController::class, 'b6']);
        Route::get('/data/kebahasaan/duta_bahasa_nasional', [GuestController::class, 'b7']);
        Route::get('/data/kebahasaan/duta_bahasa_provinsi', [GuestController::class, 'b8']);
        //DATA KATEGORI C
        Route::get('/data/kesastraan/bengkel_sastra_dan_bahasa', [GuestController::class, 'c1']);
        Route::get('/data/kesastraan/penghargaan_sastra', [GuestController::class, 'c2']);
        Route::get('/data/kesastraan/musikalisasi_puisi_nasional', [GuestController::class, 'c3']);
        Route::get('/data/kesastraan/musikalisasi_puisi_provinsi', [GuestController::class, 'c4']);
        //DATA KATEGORI D
        Route::get('/data/komunitas/komunitas_bahasa', [GuestController::class, 'd1']);
        Route::get('/data/komunitas/komunitas_sastra', [GuestController::class, 'd2']);
        //DATA KATEGORI E
        Route::get('/data/penelitian/penelitian', [GuestController::class, 'e1']);
    });


    //OPERATOR
    Route::group(['middleware' => ['AkunLoginMiddleware:operator']], function () {
        //INDEX OPERATOR
        Route::get('/operator/input', [OperatorController::class, 'input']);
        Route::get('/operator/edit', [OperatorController::class, 'edit']);

        //INPUT KATEGORI A
        Route::get('/operator/input/sekretariat/anggaran', [InputController::class, 'a1']);
        Route::post('/operator/input/sekretariat/anggaran', [InputController::class, 'store_a1']);

        Route::get('/operator/input/sekretariat/realisasi_anggaran', [InputController::class, 'a2']);
        Route::post('/operator/input/sekretariat/realisasi_anggaran', [InputController::class, 'store_a2']);

        Route::get('/operator/input/sekretariat/kepegawaian', [InputController::class, 'a3']);
        Route::post('/operator/input/sekretariat/kepegawaian', [InputController::class, 'store_a3']);

        Route::get('/operator/input/sekretariat/kerja_sama', [InputController::class, 'a4']);
        Route::post('/operator/input/sekretariat/kerja_sama', [InputController::class, 'store_a4']);

        Route::get('/operator/input/sekretariat/tanah_dan_bangunan', [InputController::class, 'a5']);
        Route::post('/operator/input/sekretariat/tanah_dan_bangunan', [InputController::class, 'store_a5']);

        Route::get('/operator/input/sekretariat/perpustakaan', [InputController::class, 'a6']);
        Route::post('/operator/input/sekretariat/perpustakaan', [InputController::class, 'store_a6']);

        Route::get('/operator/input/sekretariat/inventarisasi_bmn', [InputController::class, 'a7']);
        Route::post('/operator/input/sekretariat/inventarisasi_bmn', [InputController::class, 'store_a7']);

        //INPUT KATEGORI B
        Route::get('/operator/input/kebahasaan/kamus_ensiklopedia', [InputController::class, 'b1']);
        Route::post('/operator/input/kebahasaan/kamus_ensiklopedia', [InputController::class, 'store_b1']);

        Route::get('/operator/input/kebahasaan/jurnal_majalah', [InputController::class, 'b2']);
        Route::post('/operator/input/kebahasaan/jurnal_majalah', [InputController::class, 'store_b2']);

        Route::get('/operator/input/kebahasaan/terbitan_umum', [InputController::class, 'b3']);
        Route::post('/operator/input/kebahasaan/terbitan_umum', [InputController::class, 'store_b3']);

        Route::get('/operator/input/kebahasaan/penyuluhan', [InputController::class, 'b4']);
        Route::post('/operator/input/kebahasaan/penyuluhan', [InputController::class, 'store_b4']);

        Route::get('/operator/input/kebahasaan/pesuluh', [InputController::class, 'b5']);
        Route::get('/operator/input/kebahasaan/pesuluh/{id}', [InputController::class, 'pilih_b5']);
        Route::post('/operator/input/kebahasaan/pesuluh/{id}', [InputController::class, 'store_b5']);

        Route::get('/operator/input/kebahasaan/penghargaan_bahasa', [InputController::class, 'b6']);
        Route::post('/operator/input/kebahasaan/penghargaan_bahasa', [InputController::class, 'store_b6']);

        Route::get('/operator/input/kebahasaan/duta_bahasa_nasional', [InputController::class, 'b7']);
        Route::post('/operator/input/kebahasaan/duta_bahasa_nasional', [InputController::class, 'store_b7']);

        Route::get('/operator/input/kebahasaan/duta_bahasa_provinsi', [InputController::class, 'b8']);
        Route::post('/operator/input/kebahasaan/duta_bahasa_provinsi', [InputController::class, 'store_b8']);

        //INPUT KATEGORI C
        Route::get('/operator/input/kesastraan/bengkel_sastra_dan_bahasa', [InputController::class, 'c1']);
        Route::post('/operator/input/kesastraan/bengkel_sastra_dan_bahasa', [InputController::class, 'store_c1']);

        Route::get('/operator/input/kesastraan/penghargaan_sastra', [InputController::class, 'c2']);
        Route::post('/operator/input/kesastraan/penghargaan_sastra', [InputController::class, 'store_c2']);

        Route::get('/operator/input/kesastraan/musikalisasi_puisi_nasional', [InputController::class, 'c3']);
        Route::post('/operator/input/kesastraan/musikalisasi_puisi_nasional', [InputController::class, 'store_c3']);

        Route::get('/operator/input/kesastraan/musikalisasi_puisi_provinsi', [InputController::class, 'c4']);
        Route::post('/operator/input/kesastraan/musikalisasi_puisi_provinsi', [InputController::class, 'store_c4']);

        //INPUT KATEGORI D
        Route::get('/operator/input/komunitas/komunitas_bahasa', [InputController::class, 'd1']);
        Route::post('/operator/input/komunitas/komunitas_bahasa', [InputController::class, 'store_d1']);

        Route::get('/operator/input/komunitas/komunitas_sastra', [InputController::class, 'd2']);
        Route::post('/operator/input/komunitas/komunitas_sastra', [InputController::class, 'store_d2']);

        //INPUT KATEGORI E
        Route::get('/operator/input/penelitian/penelitian', [InputController::class, 'e1']);
        Route::post('/operator/input/penelitian/penelitian', [InputController::class, 'store_e1']);

        //EDIT KATEGORI A
        Route::get('/operator/edit/sekretariat/anggaran', [EditController::class, 'a1']);
        Route::get('/operator/edit/sekretariat/realisasi_anggaran', [EditController::class, 'a2']);
        Route::get('/operator/edit/sekretariat/kepegawaian', [EditController::class, 'a3']);
        Route::get('/operator/edit/sekretariat/kerja_sama', [EditController::class, 'a4']);
        Route::get('/operator/edit/sekretariat/tanah_dan_bangunan', [EditController::class, 'a5']);
        Route::get('/operator/edit/sekretariat/tanah_dan_bangunan/{id}', [EditController::class, 'show_a5']);
        Route::get('/operator/edit/sekretariat/perpustakaan', [EditController::class, 'a6']);
        Route::get('/operator/edit/sekretariat/inventarisasi_bmn', [EditController::class, 'a7']);
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

        //HAPUS KATEGORI A
        Route::get('/operator/edit/sekretariat/anggaran/hapus/{id}', [HapusController::class, 'hapus_a1']);
        Route::get('/operator/edit/sekretariat/realisasi_anggaran/hapus/{id}', [HapusController::class, 'hapus_a2']);
        Route::get('/operator/edit/sekretariat/kepegawaian/hapus/{id}', [HapusController::class, 'hapus_a3']);
        Route::get('/operator/edit/sekretariat/kerja_sama/hapus/{id}', [HapusController::class, 'hapus_a4']);
        Route::get('/operator/edit/sekretariat/tanah_dan_bangunan/hapus/{id}', [HapusController::class, 'hapus_a5']);
        Route::get('/operator/edit/sekretariat/perpustakaan/hapus/{id}', [HapusController::class, 'hapus_a6']);
        Route::get('/operator/edit/sekretariat/inventarisasi_bmn/hapus/{id}', [HapusController::class, 'hapus_a7']);
        //HAPUS KATEGORI B
        Route::get('/operator/edit/kebahasaan/kamus_ensiklopedia/hapus/{id}', [HapusController::class, 'hapus_b1']);
        Route::get('/operator/edit/kebahasaan/jurnal_majalah/hapus/{id}', [HapusController::class, 'hapus_b2']);
        Route::get('/operator/edit/kebahasaan/terbitan_umum/hapus/{id}', [HapusController::class, 'hapus_b3']);
        Route::get('/operator/edit/kebahasaan/penyuluhan/hapus/{id}', [HapusController::class, 'hapus_b4']);
        Route::get('/operator/edit/kebahasaan/pesuluh/hapus/{id}', [HapusController::class, 'hapus_b5']);
        Route::get('/operator/edit/kebahasaan/penghargaan_bahasa/hapus/{id}', [HapusController::class, 'hapus_b6']);
        Route::get('/operator/edit/kebahasaan/duta_bahasa_nasional/hapus/{id}', [HapusController::class, 'hapus_b7']);
        Route::get('/operator/edit/kebahasaan/duta_bahasa_provinsi/hapus/{id}', [HapusController::class, 'hapus_b8']);
        //HAPUS KATEGORI C
        Route::get('/operator/edit/kesastraan/bengkel_sastra_dan_bahasa/hapus/{id}', [HapusController::class, 'hapus_c1']);
        Route::get('/operator/edit/kesastraan/penghargaan_sastra/hapus/{id}', [HapusController::class, 'hapus_c2']);
        Route::get('/operator/edit/kesastraan/musikalisasi_puisi_nasional/hapus/{id}', [HapusController::class, 'hapus_c3']);
        Route::get('/operator/edit/kesastraan/musikalisasi_puisi_provinsi/hapus/{id}', [HapusController::class, 'hapus_c4']);
        //HAPUS KATEGORI D
        Route::get('/operator/edit/komunitas/komunitas_bahasa/hapus/{id}', [HapusController::class, 'hapus_d1']);
        Route::get('/operator/edit/komunitas/komunitas_sastra/hapus/{id}', [HapusController::class, 'hapus_d2']);
        //HAPUS KATEGORI E
        Route::get('/operator/edit/penelitian/penelitian/hapus/{id}', [HapusController::class, 'hapus_e1']);
    });

    //VALIDATOR
    Route::group(['middleware' => ['AkunLoginMiddleware:validator']], function () {
        //INDEX
        Route::get('/validator/validasi', [ValidatorController::class, 'validasi']);
        //VALIDATOR KATEGORI A
        Route::get('/validator/sekretariat/anggaran', [ValidatorController::class, 'a1']);
        Route::post('/validator/sekretariat/anggaran', [ValidatorController::class, 'validasi_a1']);

        Route::get('/validator/sekretariat/realisasi_anggaran', [ValidatorController::class, 'a2']);
        Route::post('/validator/sekretariat/realisasi_anggaran', [ValidatorController::class, 'validasi_a2']);

        Route::get('/validator/sekretariat/kepegawaian', [ValidatorController::class, 'a3']);
        Route::post('/validator/sekretariat/kepegawaian', [ValidatorController::class, 'validasi_a3']);

        Route::get('/validator/sekretariat/kerja_sama', [ValidatorController::class, 'a4']);
        Route::post('/validator/sekretariat/kerja_sama', [ValidatorController::class, 'validasi_a4']);

        Route::get('/validator/sekretariat/tanah_dan_bangunan', [ValidatorController::class, 'a5']);
        Route::post('/validator/sekretariat/tanah_dan_bangunan', [ValidatorController::class, 'validasi_a5']);

        Route::get('/validator/sekretariat/perpustakaan', [ValidatorController::class, 'a6']);
        Route::post('/validator/sekretariat/perpustakaan', [ValidatorController::class, 'validasi_a6']);

        Route::get('/validator/sekretariat/inventarisasi_bmn', [ValidatorController::class, 'a7']);
        Route::post('/validator/sekretariat/inventarisasi_bmn', [ValidatorController::class, 'validasi_a7']);

        //VALIDATOR KATEGORI B
        Route::get('/validator/kebahasaan/kamus_ensiklopedia', [ValidatorController::class, 'b1']);
        Route::post('/validator/kebahasaan/kamus_ensiklopedia', [ValidatorController::class, 'validasi_b1']);

        Route::get('/validator/kebahasaan/jurnal_majalah', [ValidatorController::class, 'b2']);
        Route::post('/validator/kebahasaan/jurnal_majalah', [ValidatorController::class, 'validasi_b2']);

        Route::get('/validator/kebahasaan/terbitan_umum', [ValidatorController::class, 'b3']);
        Route::post('/validator/kebahasaan/terbitan_umum', [ValidatorController::class, 'validasi_b3']);

        Route::get('/validator/kebahasaan/penyuluhan', [ValidatorController::class, 'b4']);
        Route::post('/validator/kebahasaan/penyuluhan', [ValidatorController::class, 'validasi_b4']);

        Route::get('/validator/kebahasaan/pesuluh', [ValidatorController::class, 'b5']);
        Route::post('/validator/kebahasaan/pesuluh', [ValidatorController::class, 'validasi_b5']);

        Route::get('/validator/kebahasaan/penghargaan_bahasa', [ValidatorController::class, 'b6']);
        Route::post('/validator/kebahasaan/penghargaan_bahasa', [ValidatorController::class, 'validasi_b6']);

        Route::get('/validator/kebahasaan/duta_bahasa_nasional', [ValidatorController::class, 'b7']);
        Route::post('/validator/kebahasaan/duta_bahasa_nasional', [ValidatorController::class, 'validasi_b7']);

        Route::get('/validator/kebahasaan/duta_bahasa_provinsi', [ValidatorController::class, 'b8']);
        Route::post('/validator/kebahasaan/duta_bahasa_provinsi', [ValidatorController::class, 'validasi_b8']);

        //VALIDATOR KATEGORI C
        Route::get('/validator/kesastraan/bengkel_sastra_dan_bahasa', [ValidatorController::class, 'c1']);
        Route::post('/validator/kesastraan/bengkel_sastra_dan_bahasa', [ValidatorController::class, 'validasi_c1']);

        Route::get('/validator/kesastraan/penghargaan_sastra', [ValidatorController::class, 'c2']);
        Route::post('/validator/kesastraan/penghargaan_sastra', [ValidatorController::class, 'validasi_c2']);

        Route::get('/validator/kesastraan/musikalisasi_puisi_nasional', [ValidatorController::class, 'c3']);
        Route::post('/validator/kesastraan/musikalisasi_puisi_nasional', [ValidatorController::class, 'validasi_c3']);

        Route::get('/validator/kesastraan/musikalisasi_puisi_provinsi', [ValidatorController::class, 'c4']);
        Route::post('/validator/kesastraan/musikalisasi_puisi_provinsi', [ValidatorController::class, 'validasi_c4']);

        //VALIDATOR KATEGORI D
        Route::get('/validator/komunitas/komunitas_bahasa', [ValidatorController::class, 'd1']);
        Route::post('/validator/komunitas/komunitas_bahasa', [ValidatorController::class, 'validasi_d1']);

        Route::get('/validator/komunitas/komunitas_sastra', [ValidatorController::class, 'd2']);
        Route::post('/validator/komunitas/komunitas_sastra', [ValidatorController::class, 'validasi_d2']);

        //VALIDATOR KATEGORI E
        Route::get('/validator/penelitian/penelitian', [ValidatorController::class, 'e1']);
        Route::post('/validator/penelitian/penelitian', [ValidatorController::class, 'validasi_e1']);
    });

    ////========================================== MEDIA ===================
    //MEDIA S 1
    Route::get('/media/sekretariat/kerja_sama', [MediaController::class, 'ma1']);
    Route::put('/media/sekretariat/kerja_sama/{id}', [MediaController::class, 'store_ma1']);
    Route::get('/media/sekretariat/kerja_sama/hapus/{id}', [MediaController::class, 'hapus_ma1']);

    Route::get('/media/sekretariat/tanah_dan_bangunan', [MediaController::class, 'ma2']);
    Route::put('/media/sekretariat/tanah_dan_bangunan/{id}', [MediaController::class, 'store_ma2']);
    Route::get('/media/sekretariat/tanah_dan_bangunan/hapus/{id}', [MediaController::class, 'hapus_ma2']);

    //MEDIA S 2
    Route::get('/media/kebahasaan/kamus_ensiklopedia', [MediaController::class, 'mb1']);
    Route::put('/media/kebahasaan/kamus_ensiklopedia/{id}', [MediaController::class, 'store_mb1']);
    Route::get('/media/kebahasaan/kamus_ensiklopedia/hapus/{id}', [MediaController::class, 'hapus_mb1']);

    Route::get('/media/kebahasaan/jurnal_majalah', [MediaController::class, 'mb2']);
    Route::put('/media/kebahasaan/jurnal_majalah/{id}', [MediaController::class, 'store_mb2']);
    Route::get('/media/kebahasaan/jurnal_majalah/hapus/{id}', [MediaController::class, 'hapus_mb2']);

    Route::get('/media/kebahasaan/terbitan_umum', [MediaController::class, 'mb3']);
    Route::put('/media/kebahasaan/terbitan_umum/{id}', [MediaController::class, 'store_mb3']);
    Route::get('/media/kebahasaan/terbitan_umum/hapus/{id}', [MediaController::class, 'hapus_mb3']);

    Route::get('/media/kebahasaan/penyuluhan', [MediaController::class, 'mb4']);
    Route::put('/media/kebahasaan/penyuluhan/{id}', [MediaController::class, 'store_mb4']);
    Route::get('/media/kebahasaan/penyuluhan/hapus/{id}', [MediaController::class, 'hapus_mb4']);

    Route::get('/media/kebahasaan/penghargaan_bahasa', [MediaController::class, 'mb5']);
    Route::put('/media/kebahasaan/penghargaan_bahasa/{id}', [MediaController::class, 'store_mb5']);
    Route::get('/media/kebahasaan/penghargaan_bahasa/hapus/{id}', [MediaController::class, 'hapus_mb5']);

    Route::get('/media/kebahasaan/duta_bahasa_nasional', [MediaController::class, 'mb6']);
    Route::put('/media/kebahasaan/duta_bahasa_nasional/{id}', [MediaController::class, 'store_mb6']);
    Route::get('/media/kebahasaan/duta_bahasa_nasional/hapus/{id}', [MediaController::class, 'hapus_mb6']);

    Route::get('/media/kebahasaan/duta_bahasa_provinsi', [MediaController::class, 'mb7']);
    Route::put('/media/kebahasaan/duta_bahasa_provinsi/{id}', [MediaController::class, 'store_mb7']);
    Route::get('/media/kebahasaan/duta_bahasa_provinsi/hapus/{id}', [MediaController::class, 'hapus_mb7']);

    //MEDIA S 3
    Route::get('/media/kesastraan/bengkel_sastra_dan_bahasa', [MediaController::class, 'mc1']);
    Route::put('/media/kesastraan/bengkel_sastra_dan_bahasa/{id}', [MediaController::class, 'store_mc1']);
    Route::get('/media/kesastraan/bengkel_sastra_dan_bahasa/hapus/{id}', [MediaController::class, 'hapus_mc1']);

    Route::get('/media/kesastraan/penghargaan_sastra', [MediaController::class, 'mc2']);
    Route::put('/media/kesastraan/penghargaan_sastra/{id}', [MediaController::class, 'store_mc2']);
    Route::get('/media/kesastraan/penghargaan_sastra/hapus/{id}', [MediaController::class, 'hapus_mc2']);

    Route::get('/media/kesastraan/musikalisasi_puisi_nasional', [MediaController::class, 'mc3']);
    Route::put('/media/kesastraan/musikalisasi_puisi_nasional/{id}', [MediaController::class, 'store_mc3']);
    Route::get('/media/kesastraan/musikalisasi_puisi_nasional/hapus/{id}', [MediaController::class, 'hapus_mc3']);

    Route::get('/media/kesastraan/musikalisasi_puisi_provinsi', [MediaController::class, 'mc4']);
    Route::put('/media/kesastraan/musikalisasi_puisi_provinsi/{id}', [MediaController::class, 'store_mc4']);
    Route::get('/media/kesastraan/musikalisasi_puisi_provinsi/hapus/{id}', [MediaController::class, 'hapus_mc4']);

    //MEDIA S 5
    Route::get('/media/penelitian/penelitian', [MediaController::class, 'me1']);
    Route::put('/media/penelitian/penelitian/{id}', [MediaController::class, 'store_me1']);
    Route::get('/media/penelitian/penelitian/hapus/{id}', [MediaController::class, 'hapus_me1']);

    ////========================================== LAPORAN ===================
    //LAPORAN S 1
    Route::get('/laporan/sekretariat/anggaran', [LaporanController::class, 'la1']);
    Route::get('/laporan/sekretariat/realisasi_anggaran', [LaporanController::class, 'la2']);
    Route::get('/laporan/sekretariat/kepegawaian', [LaporanController::class, 'la3']);
    Route::get('/laporan/sekretariat/kerja_sama', [LaporanController::class, 'la4']);
    Route::get('/laporan/sekretariat/tanah_dan_bangunan', [LaporanController::class, 'la5']);
    Route::get('/laporan/sekretariat/perpustakaan', [LaporanController::class, 'la6']);
    Route::get('/laporan/sekretariat/inventarisasi_bmn', [LaporanController::class, 'la7']);
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

    //TAMPIL LAPORAN S 1
    Route::get('/laporan/sekretariat/anggaran/tampil', [LaporanController::class, 'tampil_la1']);
    Route::get('/laporan/sekretariat/realisasi_anggaran/tampil', [LaporanController::class, 'tampil_la2']);
    Route::get('/laporan/sekretariat/kepegawaian/tampil', [LaporanController::class, 'tampil_la3']);
    Route::get('/laporan/sekretariat/kerja_sama/tampil', [LaporanController::class, 'tampil_la4']);
    Route::get('/laporan/sekretariat/tanah_dan_bangunan/tampil', [LaporanController::class, 'tampil_la5']);
    Route::get('/laporan/sekretariat/perpustakaan/tampil', [LaporanController::class, 'tampil_la6']);
    Route::get('/laporan/sekretariat/inventarisasi_bmn/tampil', [LaporanController::class, 'tampil_la7']);
    //TAMPIL LAPORAN S 2
    Route::get('/laporan/kebahasaan/kamus_ensiklopedia/tampil', [LaporanController::class, 'tampil_lb1']);
    Route::get('/laporan/kebahasaan/jurnal_umum/tampil', [LaporanController::class, 'tampil_lb2']);
    Route::get('/laporan/kebahasaan/terbitan_umum/tampil', [LaporanController::class, 'tampil_lb3']);
    Route::get('/laporan/kebahasaan/penyuluhan/tampil', [LaporanController::class, 'tampil_lb4']);
    Route::get('/laporan/kebahasaan/pesuluh/tampil', [LaporanController::class, 'tampil_lb5']);
    Route::get('/laporan/kebahasaan/penghargaan_nasional/tampil', [LaporanController::class, 'tampil_lb6']);
    Route::get('/laporan/kebahasaan/duta_bahasa_nasional/tampil', [LaporanController::class, 'tampil_lb7']);
    Route::get('/laporan/kebahasaan/duta_bahasa_provinsi/tampil', [LaporanController::class, 'tampil_lb8']);
    //TAMPIL LAPORAN S 3
    Route::get('/laporan/kesastraan/bengkel_sastra_dan_bahasa/tampil', [LaporanController::class, 'tampil_lc1']);
    Route::get('/laporan/kesastraan/penghargaan_sastra/tampil', [LaporanController::class, 'tampil_lc2']);
    Route::get('/laporan/kesastraan/musikalisasi_puisi_nasional/tampil', [LaporanController::class, 'tampil_lc3']);
    Route::get('/laporan/kesastraan/musikalisasi_puisi_provinsi/tampil', [LaporanController::class, 'tampil_lc4']);
    //TAMPIL LAPORAN S 4
    Route::get('/laporan/komunitas/komunitas_bahasa/tampil', [LaporanController::class, 'tampil_ld1']);
    Route::get('/laporan/komunitas/komunitas_sastra/tampil', [LaporanController::class, 'tampil_ld2']);
    //TAMPIL LAPORAN S 5
    Route::get('/laporan/penelitian/penelitian/tampil', [LaporanController::class, 'tampil_le1']);

    //PDF S 1
    Route::get('/pdf/sekretariat/anggaran', [ExportController::class, 'pdf_a1']);
    Route::get('/pdf/sekretariat/realisasi_anggaran', [ExportController::class, 'pdf_a2']);
    Route::get('/pdf/sekretariat/kepegawaian', [ExportController::class, 'pdf_a3']);
    Route::get('/pdf/sekretariat/kerja_sama', [ExportController::class, 'pdf_a4']);
    Route::get('/pdf/sekretariat/tanah_dan_bangunan', [ExportController::class, 'pdf_a5']);
    Route::get('/pdf/sekretariat/perpustakaan', [ExportController::class, 'pdf_a6']);
    Route::get('/pdf/sekretariat/inventarisasi_bmn', [ExportController::class, 'pdf_a7']);
    //PDF S 2
    Route::get('/pdf/kebahasaan/kamus_ensiklopedia', [ExportController::class, 'pdf_b1']);
    Route::get('/pdf/kebahasaan/jurnal_umum', [ExportController::class, 'pdf_b2']);
    Route::get('/pdf/kebahasaan/terbitan_umum', [ExportController::class, 'pdf_b3']);
    Route::get('/pdf/kebahasaan/penyuluhan', [ExportController::class, 'pdf_b4']);
    Route::get('/pdf/kebahasaan/pesuluh', [ExportController::class, 'pdf_b5']);
    Route::get('/pdf/kebahasaan/penghargaan_nasional', [ExportController::class, 'pdf_b6']);
    Route::get('/pdf/kebahasaan/duta_bahasa_nasional', [ExportController::class, 'pdf_b7']);
    Route::get('/pdf/kebahasaan/duta_bahasa_provinsi', [ExportController::class, 'pdf_b8']);
    //PDF S 3
    Route::get('/pdf/kesastraan/bengkel_sastra_dan_bahasa', [ExportController::class, 'pdf_c1']);
    Route::get('/pdf/kesastraan/penghargaan_sastra', [ExportController::class, 'pdf_c2']);
    Route::get('/pdf/kesastraan/musikalisasi_puisi_nasional', [ExportController::class, 'pdf_c3']);
    Route::get('/pdf/kesastraan/musikalisasi_puisi_provinsi', [ExportController::class, 'pdf_c4']);
    //PDF S 4
    Route::get('/pdf/komunitas/komunitas_bahasa', [ExportController::class, 'pdf_d1']);
    Route::get('/pdf/komunitas/komunitas_sastra', [ExportController::class, 'pdf_d2']);
    //PDF S 5
    Route::get('/pdf/penelitian/penelitian', [ExportController::class, 'pdf_e1']);

    //EXCEL S 1
    Route::get('/excel/sekretariat/anggaran', [ExportController::class, 'excel_a1']);
    Route::get('/excel/sekretariat/realisasi_anggaran', [ExportController::class, 'excel_a2']);
    Route::get('/excel/sekretariat/kepegawaian', [ExportController::class, 'excel_a3']);
    Route::get('/excel/sekretariat/kerja_sama', [ExportController::class, 'excel_a4']);
    Route::get('/excel/sekretariat/tanah_dan_bangunan', [ExportController::class, 'excel_a5']);
    Route::get('/excel/sekretariat/perpustakaan', [ExportController::class, 'excel_a6']);
    Route::get('/excel/sekretariat/inventarisasi_bmn', [ExportController::class, 'excel_a7']);
    //EXCEL S 2
    Route::get('/excel/kebahasaan/kamus_ensiklopedia', [ExportController::class, 'excel_b1']);
    Route::get('/excel/kebahasaan/jurnal_umum', [ExportController::class, 'excel_b2']);
    Route::get('/excel/kebahasaan/terbitan_umum', [ExportController::class, 'excel_b3']);
    Route::get('/excel/kebahasaan/penyuluhan', [ExportController::class, 'excel_b4']);
    Route::get('/excel/kebahasaan/pesuluh', [ExportController::class, 'excel_b5']);
    Route::get('/excel/kebahasaan/pesuluh_pilih', [ExportController::class, 'excel_b5_pilih']);
    Route::get('/excel/kebahasaan/penghargaan_nasional', [ExportController::class, 'excel_b6']);
    Route::get('/excel/kebahasaan/duta_bahasa_nasional', [ExportController::class, 'excel_b7']);
    Route::get('/excel/kebahasaan/duta_bahasa_provinsi', [ExportController::class, 'excel_b8']);
    //EXCEL S 3
    Route::get('/excel/kesastraan/bengkel_sastra_dan_bahasa', [ExportController::class, 'excel_c1']);
    Route::get('/excel/kesastraan/penghargaan_sastra', [ExportController::class, 'excel_c2']);
    Route::get('/excel/kesastraan/musikalisasi_puisi_nasional', [ExportController::class, 'excel_c3']);
    Route::get('/excel/kesastraan/musikalisasi_puisi_provinsi', [ExportController::class, 'excel_c4']);
    //EXCEL S 4
    Route::get('/excel/komunitas/komunitas_bahasa', [ExportController::class, 'excel_d1']);
    Route::get('/excel/komunitas/komunitas_sastra', [ExportController::class, 'excel_d2']);
    //EXCEL S 5
    Route::get('/excel/penelitian/penelitian', [ExportController::class, 'excel_e1']);

    //IMPORT S 1
    Route::post('/import/sekretariat/anggaran', [ImportController::class, 'import_a1']);
    Route::post('/import/sekretariat/realisasi_anggaran', [ImportController::class, 'import_a2']);
    Route::post('/import/sekretariat/kepegawaian', [ImportController::class, 'import_a3']);
    Route::post('/import/sekretariat/kerja_sama', [ImportController::class, 'import_a4']);
    Route::post('/import/sekretariat/tanah_dan_bangunan', [ImportController::class, 'import_a5']);
    Route::post('/import/sekretariat/perpustakaan', [ImportController::class, 'import_a6']);
    Route::post('/import/sekretariat/inventarisasi_bmn', [ImportController::class, 'import_a7']);
    //IMPORT S 2
    Route::post('/import/kebahasaan/kamus_ensiklopedia', [ImportController::class, 'import_b1']);
    Route::post('/import/kebahasaan/jurnal_umum', [ImportController::class, 'import_b2']);
    Route::post('/import/kebahasaan/terbitan_umum', [ImportController::class, 'import_b3']);
    Route::post('/import/kebahasaan/penyuluhan', [ImportController::class, 'import_b4']);
    Route::post('/import/kebahasaan/pesuluh', [ImportController::class, 'import_b5']);
    Route::post('/import/kebahasaan/penghargaan_nasional', [ImportController::class, 'import_b6']);
    Route::post('/import/kebahasaan/duta_bahasa_nasional', [ImportController::class, 'import_b7']);
    Route::post('/import/kebahasaan/duta_bahasa_provinsi', [ImportController::class, 'import_b8']);
    //IMPORT S 3
    Route::post('/import/kesastraan/bengkel_sastra_dan_bahasa', [ImportController::class, 'import_c1']);
    Route::post('/import/kesastraan/penghargaan_sastra', [ImportController::class, 'import_c2']);
    Route::post('/import/kesastraan/musikalisasi_puisi_nasional', [ImportController::class, 'import_c3']);
    Route::post('/import/kesastraan/musikalisasi_puisi_provinsi', [ImportController::class, 'import_c4']);
    //IMPORT S 4
    Route::post('/import/komunitas/komunitas_bahasa', [ImportController::class, 'import_d1']);
    Route::post('/import/komunitas/komunitas_sastra', [ImportController::class, 'import_d2']);
    //IMPORT S 5
    Route::post('/import/penelitian/penelitian', [ImportController::class, 'import_e1']);

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

    ////========================================== FORUM ===================
    //FORUM INTERNAL
    Route::get('/forum/internal', [ForumController::class, 'f1']);
    Route::post('/forum/internal', [ForumController::class, 'Store_f1']);

    //FORUM KONTAK ADMIN
    Route::get('/forum/kontak_admin', [ForumController::class, 'f2']);
    Route::post('/forum/kontak_admin', [ForumController::class, 'Store_f2']);
});
