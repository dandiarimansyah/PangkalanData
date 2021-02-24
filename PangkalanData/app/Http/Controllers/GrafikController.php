<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

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

class GrafikController extends Controller
{
    //GRAFIK S 1
    public function ga1()
    {
        $data = Anggaran::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.SEKRETARIAT.ga1', compact('tahun', 'total'));
    }

    public function ga2()
    {
        $data = Kerja_Sama::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.SEKRETARIAT.ga2', compact('tahun', 'total'));
    }
    public function ga3()
    {
        $data = Tanah_Bangunan::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.SEKRETARIAT.ga3', compact('tahun', 'total'));
    }
    public function ga4()
    {
        $data = Tanah_Bangunan::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.SEKRETARIAT.ga4', compact('tahun', 'total'));
    }

    //GRAFIK S 2
    public function gb1()
    {
        $data = Kamus::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.KEBAHASAAN.gb1', compact('tahun', 'total'));
    }
    public function gb2()
    {
        return view('GRAFIK.KEBAHASAAN.gb2');
    }
    public function gb3()
    {
        return view('GRAFIK.KEBAHASAAN.gb3');
    }
    public function gb4()
    {
        return view('GRAFIK.KEBAHASAAN.gb4');
    }

    //GRAFIK S 3
    public function gc1()
    {
        return view('GRAFIK.KESASTRAAN.gc1');
    }

    //GRAFIK S 4
    public function gd1()
    {
        return view('GRAFIK.KOMUNITAS.gd1');
    }

    //GRAFIK S 5
    public function ge1()
    {
        return view('GRAFIK.PENELITIAN.ge1');
    }
}
