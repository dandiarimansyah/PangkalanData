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

class LaporanController extends Controller
{
    //LAPORAN S 1
    public function la1()
    {
        return view('LAPORAN.SEKRETARIAT.la1');
    }

    public function la2()
    {
        return view('LAPORAN.SEKRETARIAT.la2');
    }
    public function la3()
    {
        return view('LAPORAN.SEKRETARIAT.la3');
    }
    public function la4()
    {
        return view('LAPORAN.SEKRETARIAT.la4');
    }
    public function la5()
    {
        return view('LAPORAN.SEKRETARIAT.la5');
    }

    public function tampil_la5(Request $request)
    {
        if ($request->status_tanah == 'semua' and $request->status_bangunan == 'semua') {
            $data = Tanah_Bangunan::all();
        } elseif ($request->status_tanah == 'semua') {
            $data = Tanah_Bangunan::where('status_bangunan', $request->status_bangunan)
                ->get();
        } elseif ($request->status_bangunan == 'semua') {
            $data = Tanah_Bangunan::where('status_tanah', $request->status_tanah)
                ->get();
        } else {
            $data = Tanah_Bangunan::where('status_tanah', $request->status_tanah)
                ->where('status_bangunan', $request->status_bangunan)
                ->get();
        }
        return view('LAPORAN.SEKRETARIAT.tampil_la5', compact('data'));
    }
    public function la6()
    {
        return view('LAPORAN.SEKRETARIAT.la6');
    }
    public function la7()
    {
        return view('LAPORAN.SEKRETARIAT.la7');
    }

    //LAPORAN S 2
    public function lb1()
    {
        return view('LAPORAN.KEBAHASAAN.lb1');
    }
    public function lb2()
    {
        return view('LAPORAN.KEBAHASAAN.lb2');
    }
    public function lb3()
    {
        return view('LAPORAN.KEBAHASAAN.lb3');
    }
    public function lb4()
    {
        return view('LAPORAN.KEBAHASAAN.lb4');
    }
    public function lb5()
    {
        return view('LAPORAN.KEBAHASAAN.lb5');
    }
    public function lb6()
    {
        return view('LAPORAN.KEBAHASAAN.lb6');
    }
    public function lb7()
    {
        return view('LAPORAN.KEBAHASAAN.lb7');
    }
    public function lb8()
    {
        return view('LAPORAN.KEBAHASAAN.lb8');
    }

    //LAPORAN S 3
    public function lc1()
    {
        return view('LAPORAN.KESASTRAAN.lc1');
    }
    public function lc2()
    {
        return view('LAPORAN.KESASTRAAN.lc2');
    }
    public function lc3()
    {
        return view('LAPORAN.KESASTRAAN.lc3');
    }
    public function lc4()
    {
        return view('LAPORAN.KESASTRAAN.lc4');
    }

    //LAPORAN S 4
    public function ld1()
    {
        return view('LAPORAN.KOMUNITAS.ld1');
    }
    public function ld2()
    {
        return view('LAPORAN.KOMUNITAS.ld2');
    }

    //LAPORAN S 5
    public function le1()
    {
        return view('LAPORAN.PENELITIAN.le1');
    }
}
