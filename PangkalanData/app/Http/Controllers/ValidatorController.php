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

        $Anggaran_B = Anggaran::where('validasi', 'belum')->get()->count();
        $Realisasi_Anggaran_B = Realisasi_Anggaran::where('validasi', 'belum')->get()->count();
        $Kepegawaian_B = Kepegawaian::where('validasi', 'belum')->get()->count();
        $Kerja_Sama_B = Kerja_Sama::where('validasi', 'belum')->get()->count();
        $Tanah_Bangunan_B = Tanah_Bangunan::where('validasi', 'belum')->get()->count();
        $Perpustakaan_B = Perpustakaan::where('validasi', 'belum')->get()->count();
        $Inventarisasi_B = Inventarisasi::where('validasi', 'belum')->get()->count();
        $Kamus_B = Kamus::where('validasi', 'belum')->get()->count();
        $Jurnal_B = Jurnal::where('validasi', 'belum')->get()->count();
        $Terbitan_Umum_B = Terbitan_Umum::where('validasi', 'belum')->get()->count();
        $Penyuluhan_B = Penyuluhan::where('validasi', 'belum')->get()->count();
        $Pesuluh_B = Pesuluh::where('validasi', 'belum')->get()->count();
        $Penghargaan_Bahasa_B = Penghargaan_Bahasa::where('validasi', 'belum')->get()->count();
        $Duta_Nasional_B = Duta_Nasional::where('validasi', 'belum')->get()->count();
        $Duta_Provinsi_B = Duta_Provinsi::where('validasi', 'belum')->get()->count();
        $Bengkel_Sastra_Dan_Bahasa_B = Bengkel_Sastra_Dan_Bahasa::where('validasi', 'belum')->get()->count();
        $Penghargaan_Sastra_B = Penghargaan_Sastra::where('validasi', 'belum')->get()->count();
        $Musikalisasi_Puisi_Nasional_B = Musikalisasi_Puisi_Nasional::where('validasi', 'belum')->get()->count();
        $Musikalisasi_Puisi_Provinsi_B = Musikalisasi_Puisi_Provinsi::where('validasi', 'belum')->get()->count();
        $Komunitas_Bahasa_B = Komunitas_Bahasa::where('validasi', 'belum')->get()->count();
        $Komunitas_Sastra_B = Komunitas_Sastra::where('validasi', 'belum')->get()->count();
        $Penelitian_B = Penelitian::where('validasi', 'belum')->get()->count();

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

        $Total1 = $Anggaran +
            $Realisasi_Anggaran +
            $Kepegawaian +
            $Kerja_Sama +
            $Tanah_Bangunan +
            $Perpustakaan +
            $Inventarisasi;

        $Total1_V = $Anggaran_V +
            $Realisasi_Anggaran_V +
            $Kepegawaian_V +
            $Kerja_Sama_V +
            $Tanah_Bangunan_V +
            $Perpustakaan_V +
            $Inventarisasi_V;

        $Total2 = $Kamus +
            $Jurnal +
            $Terbitan_Umum +
            $Penyuluhan +
            $Pesuluh +
            $Penghargaan_Bahasa +
            $Duta_Nasional +
            $Duta_Provinsi;

        $Total2_V = $Kamus_V +
            $Jurnal_V +
            $Terbitan_Umum_V +
            $Penyuluhan_V +
            $Pesuluh_V +
            $Penghargaan_Bahasa_V +
            $Duta_Nasional_V +
            $Duta_Provinsi_V;

        $Total3 = $Bengkel_Sastra_Dan_Bahasa +
            $Penghargaan_Sastra +
            $Musikalisasi_Puisi_Nasional +
            $Musikalisasi_Puisi_Provinsi;

        $Total3_V = $Bengkel_Sastra_Dan_Bahasa_V +
            $Penghargaan_Sastra_V +
            $Musikalisasi_Puisi_Nasional_V +
            $Musikalisasi_Puisi_Provinsi_V;

        $Total4 = $Komunitas_Bahasa +
            $Komunitas_Sastra;

        $Total4_V = $Komunitas_Bahasa_V +
            $Komunitas_Sastra_V;

        $Total5 = $Penelitian;
        $Total5_V = $Penelitian_V;

        return view('VALIDATOR.validasi', compact(
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

            'Anggaran_B',
            'Realisasi_Anggaran_B',
            'Kepegawaian_B',
            'Kerja_Sama_B',
            'Tanah_Bangunan_B',
            'Perpustakaan_B',
            'Inventarisasi_B',
            'Kamus_B',
            'Jurnal_B',
            'Terbitan_Umum_B',
            'Penyuluhan_B',
            'Pesuluh_B',
            'Penghargaan_Bahasa_B',
            'Duta_Nasional_B',
            'Duta_Provinsi_B',
            'Bengkel_Sastra_Dan_Bahasa_B',
            'Penghargaan_Sastra_B',
            'Musikalisasi_Puisi_Nasional_B',
            'Musikalisasi_Puisi_Provinsi_B',
            'Komunitas_Bahasa_B',
            'Komunitas_Sastra_B',
            'Penelitian_B',

            'Total',
            'Total_V',
            'Total1',
            'Total1_V',
            'Total2',
            'Total2_V',
            'Total3',
            'Total3_V',
            'Total4',
            'Total4_V',
            'Total5',
            'Total5_V',
        ));
    }
    //VALIDASI KATEGORI A
    public function a1()
    {
        $anggaran = Anggaran::orderBy('validasi', 'ASC')->get();

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
        $realisasi_anggaran = Realisasi_Anggaran::orderBy('validasi', 'ASC')->get();

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
        $kepegawaian = Kepegawaian::orderBy('validasi', 'ASC')->get();

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
        $kerja_sama = Kerja_Sama::orderBy('validasi', 'ASC')->get();

        return view('VALIDATOR.SEKRETARIAT.a4', compact('kerja_sama'));
    }

    public function validasi_a4(Request $request)
    {
        Kerja_Sama::whereIn('id', $request->id)
            ->update([
                'validasi' => "sudah",
            ]);
    }

    //======================================================================
    public function a5()
    {
        $tanah_bangunan = Tanah_Bangunan::orderBy('validasi', 'ASC')->get();

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
        $perpustakaan = Perpustakaan::orderBy('validasi', 'ASC')->get();

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
        $inventarisasi = Inventarisasi::orderBy('validasi', 'ASC')->get();

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
        $kamus = Kamus::orderBy('validasi', 'ASC')->get();

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
        $jurnal = Jurnal::orderBy('validasi', 'ASC')->get();

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
        $terbitan_umum = Terbitan_Umum::orderBy('validasi', 'ASC')->get();

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
        $penyuluhan = Penyuluhan::orderBy('validasi', 'ASC')->get();

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
        $pesuluh = Pesuluh::orderBy('validasi', 'ASC')->get();
        $penyuluhan = Penyuluhan::orderBy('validasi', 'ASC')->get();

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
        $penghargaan_bahasa = Penghargaan_Bahasa::orderBy('validasi', 'ASC')->get();

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
        $duta_nasional = Duta_Nasional::orderBy('validasi', 'ASC')->get();

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
        $duta_provinsi = Duta_Provinsi::orderBy('validasi', 'ASC')->get();

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
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::orderBy('validasi', 'ASC')->get();

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
        $penghargaan_sastra = Penghargaan_Sastra::orderBy('validasi', 'ASC')->get();

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
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::orderBy('validasi', 'ASC')->get();

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
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::orderBy('validasi', 'ASC')->get();

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
        $komunitas_bahasa = Komunitas_Bahasa::orderBy('validasi', 'ASC')->get();

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
        $komunitas_sastra = Komunitas_Sastra::orderBy('validasi', 'ASC')->get();

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
        $penelitian = Penelitian::orderBy('validasi', 'ASC')->get();

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
