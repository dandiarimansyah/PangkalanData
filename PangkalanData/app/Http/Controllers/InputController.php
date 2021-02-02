<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggaran;
use App\Models\Realisasi_Anggaran;
use App\Models\Kepegawaian;
use App\Models\Kerja_Sama;
use App\Models\Tanah_Bangunan;

class InputController extends Controller
{

    //INPUT KATEGORI A
    public function a1()
    {
        return view('INPUT.SEKRETARIAT.a1');
    }
    public function a2()
    {
        return view('INPUT.SEKRETARIAT.a2');
    }
    public function a3()
    {
        return view('INPUT.SEKRETARIAT.a3');
    }
    public function a4()
    {
        return view('INPUT.SEKRETARIAT.a4');
    }
    public function a5()
    {
        return view('INPUT.SEKRETARIAT.a5');
    }
    public function a6()
    {
        return view('INPUT.SEKRETARIAT.a6');
    }
    public function a7()
    {
        return view('INPUT.SEKRETARIAT.a7');
    }

    //INPUT KATEGORI B
    public function b1()
    {
        return view('INPUT.KEBAHASAAN.b1');
    }
    public function b2()
    {
        return view('INPUT.KEBAHASAAN.b2');
    }
    public function b3()
    {
        return view('INPUT.KEBAHASAAN.b3');
    }
    public function b4()
    {
        return view('INPUT.KEBAHASAAN.b4');
    }
    public function b5()
    {
        return view('INPUT.KEBAHASAAN.b5');
    }
    public function b6()
    {
        return view('INPUT.KEBAHASAAN.b6');
    }
    public function b7()
    {
        return view('INPUT.KEBAHASAAN.b7');
    }
    public function b8()
    {
        return view('INPUT.KEBAHASAAN.b8');
    }

    //INPUT KATEGORI C
    public function c1()
    {
        return view('INPUT.KESASTRAAN.c1');
    }
    public function c2()
    {
        return view('INPUT.KESASTRAAN.c2');
    }
    public function c3()
    {
        return view('INPUT.KESASTRAAN.c3');
    }
    public function c4()
    {
        return view('INPUT.KESASTRAAN.c4');
    }

    //INPUT KATEGORI D
    public function d1()
    {
        return view('INPUT.KOMUNITAS.d1');
    }
    public function d2()
    {
        return view('INPUT.KOMUNITAS.d2');
    }

    //INPUT KATEGORI E
    public function e1()
    {
        return view('INPUT.PENELITIAN.e1');
    }

    public function store_a1(Request $request)
    {
        $request->validate([
            'unit' => ['required'],
            'tahun_anggaran' => ['required'],
            'nilai_anggaran' => ['numeric']
        ]);

        $data = new Anggaran();
        $data->unit = $request->unit;
        $data->tahun_anggaran = $request->tahun_anggaran;
        $data->nilai_anggaran = $request->nilai_anggaran;
        $data->save();

        return redirect('/operator/edit/sekretariat/anggaran')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a2(Request $request)
    {
        $request->validate([
            'unit' => ['required'],
            'besar_dana' => ['numeric'],
        ]);

        $data = new Realisasi_Anggaran();
        $data->unit = $request->unit;
        $data->nilai_realisasi = $request->nilai_realisasi;
        $data->besar_dana = $request->besar_dana;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/sekretariat/realisasi_anggaran')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a3(Request $request)
    {
        $request->validate([
            'tanggal_diperbarui' => ['required'],
            'unit' => ['required'],
        ]);

        $data = new Kepegawaian();
        $data->tanggal_diperbarui = $request->tanggal_diperbarui;
        $data->unit = $request->unit;
        $data->semua_kelamin = $request->semua_kelamin;
        $data->laki = $request->laki;
        $data->perempuan = $request->perempuan;
        $data->S3 = $request->S3;
        $data->S2 = $request->S2;
        $data->S1 = $request->S1;
        $data->D3 = $request->D3;
        $data->SMA = $request->SMA;
        $data->SMP = $request->SMP;
        $data->SD = $request->SD;
        $data->T_4E = $request->T_4E;
        $data->T_4D = $request->T_4D;
        $data->T_4C = $request->T_4C;
        $data->T_4B = $request->T_4B;
        $data->T_4A = $request->T_4A;
        $data->T_3D = $request->T_3D;
        $data->T_3C = $request->T_3C;
        $data->T_3B = $request->T_3B;
        $data->T_3A = $request->T_3A;
        $data->T_2D = $request->T_2D;
        $data->T_2C = $request->T_2C;
        $data->T_2B = $request->T_2B;
        $data->T_2A = $request->T_2A;
        $data->T_1D = $request->T_1D;
        $data->T_1C = $request->T_1C;
        $data->T_1B = $request->T_1B;
        $data->T_1A = $request->T_1A;
        $data->save();

        return redirect('/operator/edit/sekretariat/kepegawaian')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a4(Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'nama_instansi' => ['required'],
            'tanggal_kerja' => ['required']
        ]);

        $data = new Kerja_Sama();
        $data->kategori = $request->kategori;
        $data->instansi = $request->instansi;
        $data->tanggal_awal = $request->tanggal_awal;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->nomor = $request->nomor;
        $data->perihal = $request->perihal;
        $data->keterangan = $request->keterangan;
        $data->ttd_1 = $request->ttd_1;
        $data->instansi_1 = $request->instansi_1;
        $data->ttd_2 = $request->ttd_2;
        $data->instansi_2 = $request->instansi_2;
        $data->save();

        return redirect('/operator/edit/sekretariat/kerja_sama')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a5(Request $request)
    {
        $request->validate([
            'balai' => ['required']
        ]);

        $data = new Tanah_Bangunan();
        $data->kategori = $request->kategori;
        $data->instansi = $request->instansi;
        $data->tanggal_awal = $request->tanggal_awal;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->nomor = $request->nomor;
        $data->perihal = $request->perihal;
        $data->keterangan = $request->keterangan;
        $data->ttd_1 = $request->ttd_1;
        $data->instansi_1 = $request->instansi_1;
        $data->ttd_2 = $request->ttd_2;
        $data->instansi_2 = $request->instansi_2;
        $data->save();

        return redirect('/operator/edit/sekretariat/kerja_sama')->with('success', 'Data Berhasil Ditambahkan!');
    }
}
