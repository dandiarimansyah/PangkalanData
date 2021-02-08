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
        $realisasi_anggaran = Realisasi_Anggaran::all();

        return view('EDIT.SEKRETARIAT.a2', compact('realisasi_anggaran'));
    }
    public function a3()
    {
        $kepegawaian = Kepegawaian::all();

        return view('EDIT.SEKRETARIAT.a3', compact('kepegawaian'));
    }
    public function a4()
    {
        $kerja_sama = Kerja_Sama::all();

        return view('EDIT.SEKRETARIAT.a4', compact('kerja_sama'));
    }
    public function a5()
    {
        $tanah_bangunan = Tanah_Bangunan::all();

        return view('EDIT.SEKRETARIAT.a5', compact('tanah_bangunan'));
    }

    public function show_a5($file)
    {
        return response()->file('tanah_dan_bangunan/' . $file);
    }

    public function a6()
    {
        $perpustakaan = Perpustakaan::all();

        return view('EDIT.SEKRETARIAT.a6', compact('perpustakaan'));
    }
    public function a7()
    {
        $inventarisasi = Inventarisasi::all();

        return view('EDIT.SEKRETARIAT.a7', compact('inventarisasi'));
    }

    //EDIT KATEGORI B
    public function b1()
    {
        $kamus = Kamus::all();

        return view('EDIT.KEBAHASAAN.b1', compact('kamus'));
    }
    public function b2()
    {
        $jurnal = Jurnal::all();

        return view('EDIT.KEBAHASAAN.b2', compact('jurnal'));
    }
    public function b3()
    {
        $terbitan_umum = Terbitan_Umum::all();

        return view('EDIT.KEBAHASAAN.b3', compact('terbitan_umum'));
    }
    public function b4()
    {
        $penyuluhan = Penyuluhan::all();

        return view('EDIT.KEBAHASAAN.b4', compact('penyuluhan'));
    }
    public function b5()
    {
        $pesuluh = Pesuluh::all();
        $penyuluhan = Penyuluhan::all();

        return view('EDIT.KEBAHASAAN.b5', compact('pesuluh', 'penyuluhan'));
    }
    public function b6()
    {
        $penghargaan_bahasa = Penghargaan_Bahasa::all();

        return view('EDIT.KEBAHASAAN.b6', compact('penghargaan_bahasa'));
    }
    public function b7()
    {
        $duta_nasional = Duta_Nasional::all();

        return view('EDIT.KEBAHASAAN.b7', compact('duta_nasional'));
    }
    public function b8()
    {
        $duta_provinsi = Duta_Provinsi::all();

        return view('EDIT.KEBAHASAAN.b8', compact('duta_provinsi'));
    }

    //EDIT KATEGORI C
    public function c1()
    {
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::all();

        return view('EDIT.KESASTRAAN.c1', compact('bengkel_sastra_dan_bahasa'));
    }
    public function c2()
    {
        $penghargaan_sastra = Penghargaan_Sastra::all();

        return view('EDIT.KESASTRAAN.c2', compact('penghargaan_sastra'));
    }
    public function c3()
    {
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::all();

        return view('EDIT.KESASTRAAN.c3', compact('musikalisasi_puisi_nasional'));
    }
    public function c4()
    {
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::all();

        return view('EDIT.KESASTRAAN.c4', compact('musikalisasi_puisi_provinsi'));
    }

    //EDIT KATEGORI D
    public function d1()
    {
        $komunitas_bahasa = Komunitas_Bahasa::all();

        return view('EDIT.KOMUNITAS.d1', compact('komunitas_bahasa'));
    }
    public function d2()
    {
        $komunitas_sastra = Komunitas_Sastra::all();

        return view('EDIT.KOMUNITAS.d2', compact('komunitas_sastra'));
    }

    //EDIT KATEGORI E
    public function e1()
    {
        $penelitian = Penelitian::all();

        return view('EDIT.PENELITIAN.e1', compact('penelitian'));
    }


    //UPDATE KATEGORI A

    public function update_a1($id, Request $request)
    {
        $data = Anggaran::where('id', $id)
            ->update([
                'unit' => $request->get('unit'),
                'tahun_anggaran' => $request->get('tahun_anggaran'),
                'nilai_anggaran' => $request->get('nilai_anggaran'),
            ]);

        return redirect('/operator/edit/sekretariat/anggaran')->with('toast_success', 'Data Berhasil Diedit!');
    }

    public function update_a2($id, Request $request)
    {
        $data = Realisasi_Anggaran::where('id', $id)
            ->update([
                'unit' => $request->get('unit'),
                'nilai_realisasi' => $request->get('nilai_realisasi'),
                'besar_dana' => $request->get('besar_dana'),
                'keterangan' => $request->get('keterangan'),
            ]);

        return redirect('/operator/edit/sekretariat/realisasi_anggaran')->with('toast_success', 'Data Berhasil Diedit!');
    }
    public function update_a3($id, Request $request)
    {
        $kepegawaian = Kepegawaian::all();

        return view('EDIT.SEKRETARIAT.a3', compact('kepegawaian'));
    }
    public function update_a4($id, Request $request)
    {
        $kerja_sama = Kerja_Sama::all();

        return view('EDIT.SEKRETARIAT.a4', compact('kerja_sama'));
    }
    public function update_a5($id, Request $request)
    {
        $tanah_bangunan = Tanah_Bangunan::all();

        return view('EDIT.SEKRETARIAT.a5', compact('tanah_bangunan'));
    }
    public function update_a6($id, Request $request)
    {
        $perpustakaan = Perpustakaan::all();

        return view('EDIT.SEKRETARIAT.a6', compact('perpustakaan'));
    }
    public function update_a7($id, Request $request)
    {
        $inventarisasi = Inventarisasi::all();

        return view('EDIT.SEKRETARIAT.a7', compact('inventarisasi'));
    }

    //UPDATE KATEGORI B
    public function update_b1($id, Request $request)
    {
        $kamus = Kamus::all();

        return view('EDIT.KEBAHASAAN.b1', compact('kamus'));
    }
    public function update_b2($id, Request $request)
    {
        $jurnal = Jurnal::all();

        return view('EDIT.KEBAHASAAN.b2', compact('jurnal'));
    }
    public function update_b3($id, Request $request)
    {
        $terbitan_umum = Terbitan_Umum::all();

        return view('EDIT.KEBAHASAAN.b3', compact('terbitan_umum'));
    }
    public function update_b4($id, Request $request)
    {
        $penyuluhan = Penyuluhan::all();

        return view('EDIT.KEBAHASAAN.b4', compact('penyuluhan'));
    }
    public function update_b5($id, Request $request)
    {
        $pesuluh = Pesuluh::all();

        return view('EDIT.KEBAHASAAN.b5', compact('pesuluh'));
    }
    public function update_b6($id, Request $request)
    {
        $penghargaan_bahasa = Penghargaan_Bahasa::all();

        return view('EDIT.KEBAHASAAN.b6', compact('penghargaan_bahasa'));
    }
    public function update_b7($id, Request $request)
    {
        $duta_nasional = Duta_Nasional::all();

        return view('EDIT.KEBAHASAAN.b7', compact('duta_nasional'));
    }
    public function update_b8($id, Request $request)
    {
        $duta_provinsi = Duta_Provinsi::all();

        return view('EDIT.KEBAHASAAN.b8', compact('duta_provinsi'));
    }

    //UPDATE KATEGORI C
    public function update_c1($id, Request $request)
    {
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::all();

        return view('EDIT.KESASTRAAN.c1', compact('bengkel_sastra_dan_bahasa'));
    }
    public function update_c2($id, Request $request)
    {
        $penghargaan_sastra = Penghargaan_Sastra::all();

        return view('EDIT.KESASTRAAN.c2', compact('penghargaan_sastra'));
    }
    public function update_c3($id, Request $request)
    {
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::all();

        return view('EDIT.KESASTRAAN.c3', compact('musikalisasi_puisi_nasional'));
    }
    public function update_c4($id, Request $request)
    {
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::all();

        return view('EDIT.KESASTRAAN.c4', compact('musikalisasi_puisi_provinsi'));
    }

    //UPDATE KATEGORI D
    public function update_d1($id, Request $request)
    {
        $komunitas_bahasa = Komunitas_Bahasa::all();

        return view('EDIT.KOMUNITAS.d1', compact('komunitas_bahasa'));
    }
    public function update_d2($id, Request $request)
    {
        $komunitas_sastra = Komunitas_Sastra::all();

        return view('EDIT.KOMUNITAS.d2', compact('komunitas_sastra'));
    }

    //UPDATE KATEGORI E
    public function update_e1($id, Request $request)
    {
        $penelitian = Penelitian::all();

        return view('EDIT.PENELITIAN.e1', compact('penelitian'));
    }
}
