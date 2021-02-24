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

        $KAMUS = Kamus::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")
            ->where('kategori', 'KAMUS')
            ->groupBy('tahun')->get();

        $ENSIKLOPEDIA = Kamus::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")
            ->where('kategori', 'ENSIKLOPEDIA')
            ->groupBy('tahun')->get();

        $TESAURUS = Kamus::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")
            ->where('kategori', 'TESAURUS')
            ->groupBy('tahun')->get();

        $GLOSARIUM = Kamus::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")
            ->where('kategori', 'GLOSARIUM')
            ->groupBy('tahun')->get();

        $LEMA = Kamus::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")
            ->where('kategori', 'LEMA')
            ->groupBy('tahun')->get();

        // // menyiapkan data untuk chart
        $tahun = [];
        $KAMUS_T = [];
        $ENSIKLOPEDIA_T = [];
        $TESAURUS_T = [];
        $GLOSARIUM_T = [];
        $LEMA_T = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
        }

        foreach ($KAMUS as $a) {
            $KAMUS_T[] = $a->total;
        }

        foreach ($ENSIKLOPEDIA as $a) {
            $ENSIKLOPEDIA_T[] = $a->total;
        }

        foreach ($TESAURUS as $a) {
            $TESAURUS_T[] = $a->total;
        }

        foreach ($GLOSARIUM as $a) {
            $GLOSARIUM_T[] = $a->total;
        }

        foreach ($LEMA as $a) {
            $LEMA_T[] = $a->total;
        }

        return view('GRAFIK.KEBAHASAAN.gb1', compact('KAMUS_T', 'ENSIKLOPEDIA_T', 'TESAURUS_T', 'GLOSARIUM_T', 'LEMA_T', 'tahun'));
    }
    public function gb2()
    {
        $data = Jurnal::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.KEBAHASAAN.gb2', compact('tahun', 'total'));
    }
    public function gb3()
    {
        $data = Terbitan_Umum::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.KEBAHASAAN.gb3', compact('tahun', 'total'));
    }
    public function gb4()
    {
        $data = Penyuluhan::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.KEBAHASAAN.gb4', compact('tahun', 'total'));
    }

    //GRAFIK S 3
    public function gc1()
    {
        $data = Bengkel_Sastra_Dan_Bahasa::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.KESASTRAAN.gc1', compact('tahun', 'total'));
    }

    //GRAFIK S 4
    public function gd1()
    {
        $data = Komunitas_Bahasa::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.KOMUNITAS.gd1', compact('tahun', 'total'));
    }

    //GRAFIK S 5
    public function ge1()
    {
        $data = Penelitian::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        $tahun = [];
        $total = [];

        foreach ($data as $a) {
            $tahun[] = $a->tahun;
            $total[] = $a->total;
        }

        return view('GRAFIK.PENELITIAN.ge1', compact('tahun', 'total'));
    }
}
