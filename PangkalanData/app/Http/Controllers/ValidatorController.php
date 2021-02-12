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

class ValidatorController extends Controller
{
    //INDEX
    public function validasi()
    {
        return view('VALIDATOR.validasi');
    }
    //VALIDASI KATEGORI A
    public function a1()
    {
        $anggaran = Anggaran::all();

        return view('VALIDATOR.SEKRETARIAT.a1', compact('anggaran'));
    }

    public function validasi_a1(Request $request)
    {
        Anggaran::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function a2()
    {
        $realisasi_anggaran = Realisasi_Anggaran::all();

        return view('VALIDATOR.SEKRETARIAT.a2', compact('realisasi_anggaran'));
    }

    public function validasi_a2(Request $request)
    {
        Realisasi_Anggaran::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function a3()
    {
        $kepegawaian = Kepegawaian::all();

        return view('VALIDATOR.SEKRETARIAT.a3', compact('kepegawaian'));
    }

    public function validasi_a3(Request $request)
    {
        Kepegawaian::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }


    //======================================================================
    public function a4()
    {
        $kerja_sama = Kerja_Sama::all();

        return view('VALIDATOR.SEKRETARIAT.a4', compact('kerja_sama'));
    }

    public function validasi_a4(Request $request)
    {
        Kerja_Sama::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function a5()
    {
        $tanah_bangunan = Tanah_Bangunan::all();

        return view('VALIDATOR.SEKRETARIAT.a5', compact('tanah_bangunan'));
    }
    public function validasi_a5(Request $request)
    {
        Tanah_Bangunan::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function a6()
    {
        $perpustakaan = Perpustakaan::all();

        return view('VALIDATOR.SEKRETARIAT.a6', compact('perpustakaan'));
    }

    public function validasi_a6(Request $request)
    {
        Perpustakaan::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function a7()
    {
        $inventarisasi = Inventarisasi::all();

        return view('VALIDATOR.SEKRETARIAT.a7', compact('inventarisasi'));
    }

    public function validasi_a7(Request $request)
    {
        Inventarisasi::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }


    //VALIDASI KATEGORI B
    public function b1()
    {
        $kamus = Kamus::all();

        return view('VALIDATOR.KEBAHASAAN.b1', compact('kamus'));
    }

    public function validasi_b1(Request $request)
    {
        Kamus::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function b2()
    {
        $jurnal = Jurnal::all();

        return view('VALIDATOR.KEBAHASAAN.b2', compact('jurnal'));
    }

    public function validasi_b2(Request $request)
    {
        Jurnal::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function b3()
    {
        $terbitan_umum = Terbitan_Umum::all();

        return view('VALIDATOR.KEBAHASAAN.b3', compact('terbitan_umum'));
    }

    public function validasi_b3(Request $request)
    {
        Terbitan_Umum::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function b4()
    {
        $penyuluhan = Penyuluhan::all();

        return view('VALIDATOR.KEBAHASAAN.b4', compact('penyuluhan'));
    }

    public function validasi_b4(Request $request)
    {
        Penyuluhan::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function b5()
    {
        $pesuluh = Pesuluh::all();
        $penyuluhan = Penyuluhan::all();

        return view('VALIDATOR.KEBAHASAAN.b5', compact('pesuluh', 'penyuluhan'));
    }

    public function validasi_b5(Request $request)
    {
        Pesuluh::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function b6()
    {
        $penghargaan_bahasa = Penghargaan_Bahasa::all();

        return view('VALIDATOR.KEBAHASAAN.b6', compact('penghargaan_bahasa'));
    }

    public function validasi_b6(Request $request)
    {
        Penghargaan_Bahasa::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function b7()
    {
        $duta_nasional = Duta_Nasional::all();

        return view('VALIDATOR.KEBAHASAAN.b7', compact('duta_nasional'));
    }

    public function validasi_b7(Request $request)
    {
        Duta_Nasional::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function b8()
    {
        $duta_provinsi = Duta_Provinsi::all();

        return view('VALIDATOR.KEBAHASAAN.b8', compact('duta_provinsi'));
    }

    public function validasi_b8(Request $request)
    {
        Duta_Provinsi::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }


    //VALIDASI KATEGORI C
    public function c1()
    {
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::all();

        return view('VALIDATOR.KESASTRAAN.c1', compact('bengkel_sastra_dan_bahasa'));
    }

    public function validasi_c1(Request $request)
    {
        Bengkel_Sastra_Dan_Bahasa::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function c2()
    {
        $penghargaan_sastra = Penghargaan_Sastra::all();

        return view('VALIDATOR.KESASTRAAN.c2', compact('penghargaan_sastra'));
    }

    public function validasi_c2(Request $request)
    {
        Penghargaan_Sastra::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function c3()
    {
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::all();

        return view('VALIDATOR.KESASTRAAN.c3', compact('musikalisasi_puisi_nasional'));
    }

    public function validasi_c3(Request $request)
    {
        Musikalisasi_Puisi_Nasional::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function c4()
    {
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::all();

        return view('VALIDATOR.KESASTRAAN.c4', compact('musikalisasi_puisi_provinsi'));
    }

    public function validasi_c4(Request $request)
    {
        Musikalisasi_Puisi_Provinsi::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //VALIDASI KATEGORI D
    public function d1()
    {
        $komunitas_bahasa = Komunitas_Bahasa::all();

        return view('VALIDATOR.KOMUNITAS.d1', compact('komunitas_bahasa'));
    }

    public function validasi_d1(Request $request)
    {
        Komunitas_Bahasa::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //======================================================================
    public function d2()
    {
        $komunitas_sastra = Komunitas_Sastra::all();

        return view('VALIDATOR.KOMUNITAS.d2', compact('komunitas_sastra'));
    }

    public function validasi_d2(Request $request)
    {
        Komunitas_Sastra::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }

    //VALIDASI KATEGORI E
    public function e1()
    {
        $penelitian = Penelitian::all();

        return view('VALIDATOR.PENELITIAN.e1', compact('penelitian'));
    }

    public function validasi_e1(Request $request)
    {
        Penelitian::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);

        return back()->with('toast_success', 'Data Berhasil Divalidasi!');
    }


    //======================================================================
    //======================================================================
    //======================================================================
    //UPDATE KATEGORI A
    public function update_a1($id, Request $request)
    {
        $anggaran = Anggaran::where('id', $id)->update([
            "unit" => $request['unit'],
            "tahun_anggaran" => $request['tahun_anggaran'],
            "nilai_anggaran" => $request['nilai_anggaran'],
        ]);

        return redirect('/operator/VALIDATOR/sekretariat/anggaran')->with('success', 'Data Berhasil Diubah!');
    }
    public function update_a2($id, Request $request)
    {
        $realisasi_anggaran = Realisasi_Anggaran::all();

        return view('VALIDATOR.SEKRETARIAT.a2', compact('realisasi_anggaran'));
    }
    public function update_a3($id, Request $request)
    {
        $kepegawaian = Kepegawaian::all();

        return view('VALIDATOR.SEKRETARIAT.a3', compact('kepegawaian'));
    }
    public function update_a4($id, Request $request)
    {
        $kerja_sama = Kerja_Sama::all();

        return view('VALIDATOR.SEKRETARIAT.a4', compact('kerja_sama'));
    }
    public function update_a5($id, Request $request)
    {
        $tanah_bangunan = Tanah_Bangunan::all();

        return view('VALIDATOR.SEKRETARIAT.a5', compact('tanah_bangunan'));
    }
    public function update_a6($id, Request $request)
    {
        $perpustakaan = Perpustakaan::all();

        return view('VALIDATOR.SEKRETARIAT.a6', compact('perpustakaan'));
    }
    public function update_a7($id, Request $request)
    {
        $inventarisasi = Inventarisasi::all();

        return view('VALIDATOR.SEKRETARIAT.a7', compact('inventarisasi'));
    }

    //UPDATE KATEGORI B
    public function update_b1($id, Request $request)
    {
        $kamus = Kamus::all();

        return view('VALIDATOR.KEBAHASAAN.b1', compact('kamus'));
    }
    public function update_b2($id, Request $request)
    {
        $jurnal = Jurnal::all();

        return view('VALIDATOR.KEBAHASAAN.b2', compact('jurnal'));
    }
    public function update_b3($id, Request $request)
    {
        $terbitan_umum = Terbitan_Umum::all();

        return view('VALIDATOR.KEBAHASAAN.b3', compact('terbitan_umum'));
    }
    public function update_b4($id, Request $request)
    {
        $penyuluhan = Penyuluhan::all();

        return view('VALIDATOR.KEBAHASAAN.b4', compact('penyuluhan'));
    }
    public function update_b5($id, Request $request)
    {
        $pesuluh = Pesuluh::all();

        return view('VALIDATOR.KEBAHASAAN.b5', compact('pesuluh'));
    }
    public function update_b6($id, Request $request)
    {
        $penghargaan_bahasa = Penghargaan_Bahasa::all();

        return view('VALIDATOR.KEBAHASAAN.b6', compact('penghargaan_bahasa'));
    }
    public function update_b7($id, Request $request)
    {
        $duta_nasional = Duta_Nasional::all();

        return view('VALIDATOR.KEBAHASAAN.b7', compact('duta_nasional'));
    }
    public function update_b8($id, Request $request)
    {
        $duta_provinsi = Duta_Provinsi::all();

        return view('VALIDATOR.KEBAHASAAN.b8', compact('duta_provinsi'));
    }

    //UPDATE KATEGORI C
    public function update_c1($id, Request $request)
    {
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::all();

        return view('VALIDATOR.KESASTRAAN.c1', compact('bengkel_sastra_dan_bahasa'));
    }
    public function update_c2($id, Request $request)
    {
        $penghargaan_sastra = Penghargaan_Sastra::all();

        return view('VALIDATOR.KESASTRAAN.c2', compact('penghargaan_sastra'));
    }
    public function update_c3($id, Request $request)
    {
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::all();

        return view('VALIDATOR.KESASTRAAN.c3', compact('musikalisasi_puisi_nasional'));
    }
    public function update_c4($id, Request $request)
    {
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::all();

        return view('VALIDATOR.KESASTRAAN.c4', compact('musikalisasi_puisi_provinsi'));
    }

    //UPDATE KATEGORI D
    public function update_d1($id, Request $request)
    {
        $komunitas_bahasa = Komunitas_Bahasa::all();

        return view('VALIDATOR.KOMUNITAS.d1', compact('komunitas_bahasa'));
    }
    public function update_d2($id, Request $request)
    {
        $komunitas_sastra = Komunitas_Sastra::all();

        return view('VALIDATOR.KOMUNITAS.d2', compact('komunitas_sastra'));
    }

    //UPDATE KATEGORI E
    public function update_e1($id, Request $request)
    {
        $penelitian = Penelitian::all();

        return view('VALIDATOR.PENELITIAN.e1', compact('penelitian'));
    }

    public function valid_a1($id, Request $request)
    {
        $request->validate([
            'validasi' => ['required'],
        ]);

        if ($request->validasi == "sudah") {
            $valid = $request->validasi;
        } else {
            $valid = "belum";
        }

        $data = Anggaran::where('id', $id)
            ->update([
                'validasi' => $valid
            ]);

        return redirect('/operator/edit/sekretariat/anggaran')->with('toast_success', 'Data Berhasil Diedit!');
    }
}
