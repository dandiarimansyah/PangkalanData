<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggaran;
use App\Models\Bengkel_Sastra_Dan_Bahasa;
use App\Models\Duta_Nasional;
use App\Models\Duta_Provinsi;
use App\Models\Inventarisasi;
use App\Models\Jurnal;
use App\Models\Kamus;
use App\Models\Realisasi_Anggaran;
use App\Models\Kepegawaian;
use App\Models\Kerja_Sama;
use App\Models\Komunitas_Bahasa;
use App\Models\Komunitas_Sastra;
use App\Models\Musikalisasi_Puisi_Nasional;
use App\Models\Musikalisasi_Puisi_Provinsi;
use App\Models\Penelitian;
use App\Models\Penghargaan_Bahasa;
use App\Models\Penghargaan_Sastra;
use App\Models\Penyuluhan;
use App\Models\Perpustakaan;
use App\Models\Pesuluh;
use App\Models\Tanah_Bangunan;
use App\Models\Terbitan_Umum;

class OperatorController extends Controller
{
    public function input()
    {
        $Anggaran = Anggaran::all()->count();
        $Realisasi_Anggaran = Realisasi_Anggaran::all()->count();
        $Kepegawaian = Kepegawaian::all()->count();
        $Kerja_Sama = Kerja_Sama::all()->count();
        $Tanah_Bangunan = Tanah_Bangunan::all()->count();
        $Perpustakaan = Perpustakaan::all()->count();
        $Inventarisasi = Inventarisasi::all()->count();
        $Kamus = Kamus::all()->count();
        $Jurnal = Jurnal::all()->count();
        $Terbitan_Umum = Terbitan_Umum::all()->count();
        $Penyuluhan = Penyuluhan::all()->count();
        $Pesuluh = Pesuluh::all()->count();
        $Penghargaan_Bahasa = Penghargaan_Bahasa::all()->count();
        $Duta_Nasional = Duta_Nasional::all()->count();
        $Duta_Provinsi = Duta_Provinsi::all()->count();
        $Bengkel_Sastra_Dan_Bahasa = Bengkel_Sastra_Dan_Bahasa::all()->count();
        $Penghargaan_Sastra = Penghargaan_Sastra::all()->count();
        $Musikalisasi_Puisi_Nasional = Musikalisasi_Puisi_Nasional::all()->count();
        $Musikalisasi_Puisi_Provinsi = Musikalisasi_Puisi_Provinsi::all()->count();
        $Komunitas_Bahasa = Komunitas_Bahasa::all()->count();
        $Komunitas_Sastra = Komunitas_Sastra::all()->count();
        $Penelitian = Penelitian::all()->count();

        $Anggaran_V = Anggaran::where('validasi', 'sudah')->get()->count();
        $Realisasi_Anggaran_V = Realisasi_Anggaran::where('validasi', 'sudah')->get()->count();
        $Kepegawaian_V = Kepegawaian::where('validasi', 'sudah')->get()->count();
        $Kerja_Sama_V = Kerja_Sama::where('validasi', 'sudah')->get()->count();
        $Tanah_Bangunan_V = Tanah_Bangunan::where('validasi', 'sudah')->get()->count();
        $Perpustakaan_V = Perpustakaan::where('validasi', 'sudah')->get()->count();
        $Inventarisasi_V = Inventarisasi::where('validasi', 'sudah')->get()->count();
        $Kamus_V = Kamus::where('validasi', 'sudah')->get()->count();
        $Jurnal_V = Jurnal::where('validasi', 'sudah')->get()->count();
        $Terbitan_Umum_V = Terbitan_Umum::where('validasi', 'sudah')->get()->count();
        $Penyuluhan_V = Penyuluhan::where('validasi', 'sudah')->get()->count();
        $Pesuluh_V = Pesuluh::where('validasi', 'sudah')->get()->count();
        $Penghargaan_Bahasa_V = Penghargaan_Bahasa::where('validasi', 'sudah')->get()->count();
        $Duta_Nasional_V = Duta_Nasional::where('validasi', 'sudah')->get()->count();
        $Duta_Provinsi_V = Duta_Provinsi::where('validasi', 'sudah')->get()->count();
        $Bengkel_Sastra_Dan_Bahasa_V = Bengkel_Sastra_Dan_Bahasa::where('validasi', 'sudah')->get()->count();
        $Penghargaan_Sastra_V = Penghargaan_Sastra::where('validasi', 'sudah')->get()->count();
        $Musikalisasi_Puisi_Nasional_V = Musikalisasi_Puisi_Nasional::where('validasi', 'sudah')->get()->count();
        $Musikalisasi_Puisi_Provinsi_V = Musikalisasi_Puisi_Provinsi::where('validasi', 'sudah')->get()->count();
        $Komunitas_Bahasa_V = Komunitas_Bahasa::where('validasi', 'sudah')->get()->count();
        $Komunitas_Sastra_V = Komunitas_Sastra::where('validasi', 'sudah')->get()->count();
        $Penelitian_V = Penelitian::where('validasi', 'sudah')->get()->count();

        $Total = $Anggaran +
            $Realisasi_Anggaran +
            $Kepegawaian +
            $Kerja_Sama +
            $Tanah_Bangunan +
            $Perpustakaan +
            $Inventarisasi +
            $Kamus +
            $Jurnal +
            $Terbitan_Umum +
            $Penyuluhan +
            $Pesuluh +
            $Penghargaan_Bahasa +
            $Duta_Nasional +
            $Duta_Provinsi +
            $Bengkel_Sastra_Dan_Bahasa +
            $Penghargaan_Sastra +
            $Musikalisasi_Puisi_Nasional +
            $Musikalisasi_Puisi_Provinsi +
            $Komunitas_Bahasa +
            $Komunitas_Sastra +
            $Penelitian;

        $Total_V = $Anggaran_V +
            $Realisasi_Anggaran_V +
            $Kepegawaian_V +
            $Kerja_Sama_V +
            $Tanah_Bangunan_V +
            $Perpustakaan_V +
            $Inventarisasi_V +
            $Kamus_V +
            $Jurnal_V +
            $Terbitan_Umum_V +
            $Penyuluhan_V +
            $Pesuluh_V +
            $Penghargaan_Bahasa_V +
            $Duta_Nasional_V +
            $Duta_Provinsi_V +
            $Bengkel_Sastra_Dan_Bahasa_V +
            $Penghargaan_Sastra_V +
            $Musikalisasi_Puisi_Nasional_V +
            $Musikalisasi_Puisi_Provinsi_V +
            $Komunitas_Bahasa_V +
            $Komunitas_Sastra_V +
            $Penelitian_V;

        return view('OPERATOR.input', compact(
            'Anggaran',
            'Realisasi_Anggaran',
            'Kepegawaian',
            'Kerja_Sama',
            'Tanah_Bangunan',
            'Perpustakaan',
            'Inventarisasi',
            'Kamus',
            'Jurnal',
            'Terbitan_Umum',
            'Penyuluhan',
            'Pesuluh',
            'Penghargaan_Bahasa',
            'Duta_Nasional',
            'Duta_Provinsi',
            'Bengkel_Sastra_Dan_Bahasa',
            'Penghargaan_Sastra',
            'Musikalisasi_Puisi_Nasional',
            'Musikalisasi_Puisi_Provinsi',
            'Komunitas_Bahasa',
            'Komunitas_Sastra',
            'Penelitian',

            'Anggaran_V',
            'Realisasi_Anggaran_V',
            'Kepegawaian_V',
            'Kerja_Sama_V',
            'Tanah_Bangunan_V',
            'Perpustakaan_V',
            'Inventarisasi_V',
            'Kamus_V',
            'Jurnal_V',
            'Terbitan_Umum_V',
            'Penyuluhan_V',
            'Pesuluh_V',
            'Penghargaan_Bahasa_V',
            'Duta_Nasional_V',
            'Duta_Provinsi_V',
            'Bengkel_Sastra_Dan_Bahasa_V',
            'Penghargaan_Sastra_V',
            'Musikalisasi_Puisi_Nasional_V',
            'Musikalisasi_Puisi_Provinsi_V',
            'Komunitas_Bahasa_V',
            'Komunitas_Sastra_V',
            'Penelitian_V',

            'Total',
            'Total_V',
        ));
    }

    public function edit()
    {
        $Anggaran = Anggaran::all()->count();
        $Realisasi_Anggaran = Realisasi_Anggaran::all()->count();
        $Kepegawaian = Kepegawaian::all()->count();
        $Kerja_Sama = Kerja_Sama::all()->count();
        $Tanah_Bangunan = Tanah_Bangunan::all()->count();
        $Perpustakaan = Perpustakaan::all()->count();
        $Inventarisasi = Inventarisasi::all()->count();
        $Kamus = Kamus::all()->count();
        $Jurnal = Jurnal::all()->count();
        $Terbitan_Umum = Terbitan_Umum::all()->count();
        $Penyuluhan = Penyuluhan::all()->count();
        $Pesuluh = Pesuluh::all()->count();
        $Penghargaan_Bahasa = Penghargaan_Bahasa::all()->count();
        $Duta_Nasional = Duta_Nasional::all()->count();
        $Duta_Provinsi = Duta_Provinsi::all()->count();
        $Bengkel_Sastra_Dan_Bahasa = Bengkel_Sastra_Dan_Bahasa::all()->count();
        $Penghargaan_Sastra = Penghargaan_Sastra::all()->count();
        $Musikalisasi_Puisi_Nasional = Musikalisasi_Puisi_Nasional::all()->count();
        $Musikalisasi_Puisi_Provinsi = Musikalisasi_Puisi_Provinsi::all()->count();
        $Komunitas_Bahasa = Komunitas_Bahasa::all()->count();
        $Komunitas_Sastra = Komunitas_Sastra::all()->count();
        $Penelitian = Penelitian::all()->count();

        $Anggaran_V = Anggaran::where('validasi', 'sudah')->get()->count();
        $Realisasi_Anggaran_V = Realisasi_Anggaran::where('validasi', 'sudah')->get()->count();
        $Kepegawaian_V = Kepegawaian::where('validasi', 'sudah')->get()->count();
        $Kerja_Sama_V = Kerja_Sama::where('validasi', 'sudah')->get()->count();
        $Tanah_Bangunan_V = Tanah_Bangunan::where('validasi', 'sudah')->get()->count();
        $Perpustakaan_V = Perpustakaan::where('validasi', 'sudah')->get()->count();
        $Inventarisasi_V = Inventarisasi::where('validasi', 'sudah')->get()->count();
        $Kamus_V = Kamus::where('validasi', 'sudah')->get()->count();
        $Jurnal_V = Jurnal::where('validasi', 'sudah')->get()->count();
        $Terbitan_Umum_V = Terbitan_Umum::where('validasi', 'sudah')->get()->count();
        $Penyuluhan_V = Penyuluhan::where('validasi', 'sudah')->get()->count();
        $Pesuluh_V = Pesuluh::where('validasi', 'sudah')->get()->count();
        $Penghargaan_Bahasa_V = Penghargaan_Bahasa::where('validasi', 'sudah')->get()->count();
        $Duta_Nasional_V = Duta_Nasional::where('validasi', 'sudah')->get()->count();
        $Duta_Provinsi_V = Duta_Provinsi::where('validasi', 'sudah')->get()->count();
        $Bengkel_Sastra_Dan_Bahasa_V = Bengkel_Sastra_Dan_Bahasa::where('validasi', 'sudah')->get()->count();
        $Penghargaan_Sastra_V = Penghargaan_Sastra::where('validasi', 'sudah')->get()->count();
        $Musikalisasi_Puisi_Nasional_V = Musikalisasi_Puisi_Nasional::where('validasi', 'sudah')->get()->count();
        $Musikalisasi_Puisi_Provinsi_V = Musikalisasi_Puisi_Provinsi::where('validasi', 'sudah')->get()->count();
        $Komunitas_Bahasa_V = Komunitas_Bahasa::where('validasi', 'sudah')->get()->count();
        $Komunitas_Sastra_V = Komunitas_Sastra::where('validasi', 'sudah')->get()->count();
        $Penelitian_V = Penelitian::where('validasi', 'sudah')->get()->count();

        $Total = $Anggaran +
            $Realisasi_Anggaran +
            $Kepegawaian +
            $Kerja_Sama +
            $Tanah_Bangunan +
            $Perpustakaan +
            $Inventarisasi +
            $Kamus +
            $Jurnal +
            $Terbitan_Umum +
            $Penyuluhan +
            $Pesuluh +
            $Penghargaan_Bahasa +
            $Duta_Nasional +
            $Duta_Provinsi +
            $Bengkel_Sastra_Dan_Bahasa +
            $Penghargaan_Sastra +
            $Musikalisasi_Puisi_Nasional +
            $Musikalisasi_Puisi_Provinsi +
            $Komunitas_Bahasa +
            $Komunitas_Sastra +
            $Penelitian;

        $Total_V = $Anggaran_V +
            $Realisasi_Anggaran_V +
            $Kepegawaian_V +
            $Kerja_Sama_V +
            $Tanah_Bangunan_V +
            $Perpustakaan_V +
            $Inventarisasi_V +
            $Kamus_V +
            $Jurnal_V +
            $Terbitan_Umum_V +
            $Penyuluhan_V +
            $Pesuluh_V +
            $Penghargaan_Bahasa_V +
            $Duta_Nasional_V +
            $Duta_Provinsi_V +
            $Bengkel_Sastra_Dan_Bahasa_V +
            $Penghargaan_Sastra_V +
            $Musikalisasi_Puisi_Nasional_V +
            $Musikalisasi_Puisi_Provinsi_V +
            $Komunitas_Bahasa_V +
            $Komunitas_Sastra_V +
            $Penelitian_V;

        return view('OPERATOR.edit', compact(
            'Anggaran',
            'Realisasi_Anggaran',
            'Kepegawaian',
            'Kerja_Sama',
            'Tanah_Bangunan',
            'Perpustakaan',
            'Inventarisasi',
            'Kamus',
            'Jurnal',
            'Terbitan_Umum',
            'Penyuluhan',
            'Pesuluh',
            'Penghargaan_Bahasa',
            'Duta_Nasional',
            'Duta_Provinsi',
            'Bengkel_Sastra_Dan_Bahasa',
            'Penghargaan_Sastra',
            'Musikalisasi_Puisi_Nasional',
            'Musikalisasi_Puisi_Provinsi',
            'Komunitas_Bahasa',
            'Komunitas_Sastra',
            'Penelitian',

            'Anggaran_V',
            'Realisasi_Anggaran_V',
            'Kepegawaian_V',
            'Kerja_Sama_V',
            'Tanah_Bangunan_V',
            'Perpustakaan_V',
            'Inventarisasi_V',
            'Kamus_V',
            'Jurnal_V',
            'Terbitan_Umum_V',
            'Penyuluhan_V',
            'Pesuluh_V',
            'Penghargaan_Bahasa_V',
            'Duta_Nasional_V',
            'Duta_Provinsi_V',
            'Bengkel_Sastra_Dan_Bahasa_V',
            'Penghargaan_Sastra_V',
            'Musikalisasi_Puisi_Nasional_V',
            'Musikalisasi_Puisi_Provinsi_V',
            'Komunitas_Bahasa_V',
            'Komunitas_Sastra_V',
            'Penelitian_V',

            'Total',
            'Total_V',
        ));
    }
}
