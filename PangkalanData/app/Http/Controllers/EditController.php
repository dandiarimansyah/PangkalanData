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

class EditController extends Controller
{
    //EDIT KATEGORI A
    public function a1()
    {
        $anggaran = Anggaran::all();

        return view('EDIT.SEKRETARIAT.a1', compact('anggaran'));
    }
    public function a2()
    {
        return view('EDIT.SEKRETARIAT.a2');
    }
    public function a3()
    {
        return view('EDIT.SEKRETARIAT.a3');
    }
    public function a4()
    {
        return view('EDIT.SEKRETARIAT.a4');
    }
    public function a5()
    {
        return view('EDIT.SEKRETARIAT.a5');
    }
    public function a6()
    {
        return view('EDIT.SEKRETARIAT.a6');
    }
    public function a7()
    {
        return view('EDIT.SEKRETARIAT.a7');
    }

    //EDIT KATEGORI B
    public function b1()
    {
        return view('EDIT.KEBAHASAAN.b1');
    }
    public function b2()
    {
        return view('EDIT.KEBAHASAAN.b2');
    }
    public function b3()
    {
        return view('EDIT.KEBAHASAAN.b3');
    }
    public function b4()
    {
        return view('EDIT.KEBAHASAAN.b4');
    }
    public function b5()
    {
        return view('EDIT.KEBAHASAAN.b5');
    }
    public function b6()
    {
        return view('EDIT.KEBAHASAAN.b6');
    }
    public function b7()
    {
        return view('EDIT.KEBAHASAAN.b7');
    }
    public function b8()
    {
        return view('EDIT.KEBAHASAAN.b8');
    }

    //EDIT KATEGORI C
    public function c1()
    {
        return view('EDIT.KESASTRAAN.c1');
    }
    public function c2()
    {
        return view('EDIT.KESASTRAAN.c2');
    }
    public function c3()
    {
        return view('EDIT.KESASTRAAN.c3');
    }
    public function c4()
    {
        return view('EDIT.KESASTRAAN.c4');
    }

    //EDIT KATEGORI D
    public function d1()
    {
        return view('EDIT.KOMUNITAS.d1');
    }
    public function d2()
    {
        return view('EDIT.KOMUNITAS.d2');
    }

    //EDIT KATEGORI E
    public function e1()
    {
        return view('EDIT.PENELITIAN.e1');
    }
}
