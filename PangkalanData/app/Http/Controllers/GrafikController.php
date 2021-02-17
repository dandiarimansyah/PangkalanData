<?php

namespace App\Http\Controllers;

use App\Models\Grafik;

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
        $anggaran = Anggaran::all();
        // $tahun_angaran = \App\

        // menyiapkan data untuk chart
        $categories = [];

        foreach ($anggaran as $a) {
            $categories[] = $a->nilai_anggaran;
        }

        return view('GRAFIK.SEKRETARIAT.ga1', ['categories' => $categories]);
    }

    public function ga2()
    {
        return view('GRAFIK.SEKRETARIAT.ga2');
    }
    public function ga3()
    {
        return view('GRAFIK.SEKRETARIAT.ga3');
    }
    public function ga4()
    {
        return view('GRAFIK.SEKRETARIAT.ga4');
    }

    //GRAFIK S 2
    public function gb1()
    {
        return view('GRAFIK.KEBAHASAAN.gb1');
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
