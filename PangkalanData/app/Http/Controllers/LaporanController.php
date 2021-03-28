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
        $data = Kepegawaian::all();

        return view('LAPORAN.SEKRETARIAT.la3', compact('data'));
    }
    public function la4()
    {
        return view('LAPORAN.SEKRETARIAT.la4');
    }
    public function la5()
    {
        return view('LAPORAN.SEKRETARIAT.la5');
    }
    public function la6()
    {
        $data = Perpustakaan::all();

        return view('LAPORAN.SEKRETARIAT.la6', compact('data'));
    }
    public function la7()
    {
        $data = Inventarisasi::all();

        return view('LAPORAN.SEKRETARIAT.la7', compact('data'));
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

    //LAPORAN S 1
    //===================================================================================================
    public function tampil_la1(Request $request)
    {
        $request->validate([
            'tahun_anggaran' => ['nullable', 'numeric'],
        ]);

        $pilih = $request->pilih;
        $tahun_anggaran = $request->tahun_anggaran;

        if ($request->pilih == 'tahun' and $request->tahun_anggaran != '') {
            $data = Anggaran::where('tahun_anggaran', $request->tahun_anggaran)
                ->get();
        } else {
            $data = Anggaran::all();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.SEKRETARIAT.tampil_la1', compact('data', 'pilih', 'tahun_anggaran'));
    }

    //===================================================================================================
    public function tampil_la2(Request $request)
    {
        $request->validate([
            'tahun_realisasi' => ['nullable', 'numeric'],
        ]);

        $pilih = $request->pilih;
        $tahun_realisasi = $request->tahun_realisasi;

        if ($request->pilih == 'tahun' and $request->tahun_realisasi != '') {
            $data = Realisasi_Anggaran::where('tahun_realisasi', $request->tahun_realisasi)
                ->get();
        } else {
            $data = Realisasi_Anggaran::all();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.SEKRETARIAT.tampil_la2', compact('data', 'pilih', 'tahun_realisasi'));
    }

    //===================================================================================================
    public function tampil_la3()
    {
        $data = Kepegawaian::all()->where('validasi', 'sudah');

        return view('LAPORAN.SEKRETARIAT.tampil_la3', compact('data'));
    }

    //===================================================================================================
    public function tampil_la4(Request $request)
    {
        $kategori = $request->kategori;
        $perihal = $request->perihal;

        if ($request->kategori == 'semua' and $request->perihal == '') {
            $data = Kerja_Sama::all();
        } else {
            $data = Kerja_Sama::where('perihal', $request->perihal)
                ->orWhere('kategori', $request->kategori)
                ->get();
        }

        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.SEKRETARIAT.tampil_la4', compact('data', 'kategori', 'perihal'));
    }

    //===================================================================================================
    public function tampil_la5(Request $request)
    {
        $status_tanah = $request->status_tanah;
        $status_bangunan = $request->status_bangunan;

        if ($request->status_tanah == 'semua' and $request->status_bangunan == 'semua') {
            $data = Tanah_Bangunan::all();
        } else if ($request->status_tanah == 'semua' or $request->status_bangunan == 'semua') {
            $data = Tanah_Bangunan::where('status_tanah', $request->status_tanah)
                ->orWhere('status_bangunan', $request->status_bangunan)
                ->get();
        } else {
            $data = Tanah_Bangunan::where('status_tanah', $request->status_tanah)
                ->where('status_bangunan', $request->status_bangunan)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.SEKRETARIAT.tampil_la5', compact('data', 'status_tanah', 'status_bangunan'));
    }

    //===================================================================================================
    public function tampil_la6(Request $request)
    {

        $data = Perpustakaan::all()->where('validasi', 'sudah');

        return view('LAPORAN.SEKRETARIAT.tampil_la6', compact('data'));
    }

    //===================================================================================================
    public function tampil_la7(Request $request)
    {

        $data = Inventarisasi::all()->where('validasi', 'sudah');

        return view('LAPORAN.SEKRETARIAT.tampil_la7', compact('data'));
    }

    //LAPORAN S 2
    //===================================================================================================
    public function tampil_lb1(Request $request)
    {
        $info_produk = $request->info_produk;
        $judul = $request->judul;
        $tim_redaksi = $request->tim_redaksi;
        $kategori = $request->kategori;

        if ($request->info_produk == '' and $request->judul == '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Kamus::all();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi != '' and $request->kategori != '') {
            $data = Kamus::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('tim_redaksi', $request->tim_redaksi)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Kamus::where('info_produk', $request->info_produk)
                ->get();
        } elseif ($request->judul != '' and $request->info_produk == '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Kamus::where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->tim_redaksi != '' and $request->judul == '' and $request->info_produk == '' and $request->kategori == '') {
            $data = Kamus::where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->kategori != '' and $request->judul == '' and $request->tim_redaksi == '' and $request->info_produk == '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Kamus::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->info_produk != '' and $request->tim_redaksi != '' and $request->judul == '' and $request->kategori == '') {
            $data = Kamus::where('info_produk', $request->info_produk)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->info_produk != '' and $request->kategori != '' and $request->tim_redaksi == '' and $request->judul == '') {
            $data = Kamus::where('info_produk', $request->info_produk)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->judul != '' and $request->tim_redaksi != '' and $request->info_produk == '' and $request->kategori == '') {
            $data = Kamus::where('judul', 'like', '%' . $request->judul . '%')
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->judul != '' and $request->kategori != '' and $request->info_produk == '' and $request->tim_redaksi == '') {
            $data = Kamus::where('judul', 'like', '%' . $request->judul . '%')
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->tim_redaksi != '' and $request->kategori != '' and $request->info_produk == '' and $request->judul == '') {
            $data = Kamus::where('tim_redaksi', $request->tim_redaksi)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi != '' or $request->kategori == '') {
            $data = Kamus::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('tim_redaksi', $request->tim_redaksi)
                ->orWhere('kategori', 'like', '%' . $request->kategori . '%')
                ->get();
        } elseif ($request->info_produk != '' or $request->judul != '' and $request->tim_redaksi != '' and $request->kategori == '') {
            $data = Kamus::where('tim_redaksi', $request->tim_redaksi)
                ->where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->orWhere('judul', 'like', '%' . $request->judul . '%')
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb1', compact('data', 'kategori', 'judul', 'info_produk', 'tim_redaksi'));
    }

    //===================================================================================================
    public function tampil_lb2(Request $request)
    {
        $info_produk = $request->info_produk;
        $judul = $request->judul;
        $tim_redaksi = $request->tim_redaksi;
        $kategori = $request->kategori;

        if ($request->info_produk == '' and $request->judul == '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Jurnal::all();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi != '' and $request->kategori != '') {
            $data = Jurnal::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('tim_redaksi', $request->tim_redaksi)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Jurnal::where('info_produk', $request->info_produk)
                ->get();
        } elseif ($request->judul != '' and $request->info_produk == '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Jurnal::where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->tim_redaksi != '' and $request->judul == '' and $request->info_produk == '' and $request->kategori == '') {
            $data = Jurnal::where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->kategori != '' and $request->judul == '' and $request->tim_redaksi == '' and $request->info_produk == '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi == '' and $request->kategori == '') {
            $data = Jurnal::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->info_produk != '' and $request->tim_redaksi != '' and $request->judul == '' and $request->kategori == '') {
            $data = Jurnal::where('info_produk', $request->info_produk)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->info_produk != '' and $request->kategori != '' and $request->tim_redaksi == '' and $request->judul == '') {
            $data = Jurnal::where('info_produk', $request->info_produk)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->judul != '' and $request->tim_redaksi != '' and $request->info_produk == '' and $request->kategori == '') {
            $data = Jurnal::where('judul', 'like', '%' . $request->judul . '%')
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->judul != '' and $request->kategori != '' and $request->info_produk == '' and $request->tim_redaksi == '') {
            $data = Jurnal::where('judul', 'like', '%' . $request->judul . '%')
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->tim_redaksi != '' and $request->kategori != '' and $request->info_produk == '' and $request->judul == '') {
            $data = Jurnal::where('tim_redaksi', $request->tim_redaksi)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi != '' or $request->kategori == '') {
            $data = Jurnal::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('tim_redaksi', $request->tim_redaksi)
                ->orWhere('kategori', 'like', '%' . $request->kategori . '%')
                ->get();
        } elseif ($request->info_produk != '' or $request->judul != '' and $request->tim_redaksi != '' and $request->kategori == '') {
            $data = Jurnal::where('tim_redaksi', $request->tim_redaksi)
                ->where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->orWhere('judul', 'like', '%' . $request->judul . '%')
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb2', compact('data', 'kategori', 'judul', 'info_produk', 'tim_redaksi'));
    }

    //===================================================================================================
    public function tampil_lb3(Request $request)
    {
        $info_produk = $request->info_produk;
        $judul = $request->judul;
        $penulis = $request->penulis;
        $kategori = $request->kategori;

        if ($request->info_produk == '' and $request->judul == '' and $request->penulis == '' and $request->kategori == '') {
            $data = Terbitan_Umum::all();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->penulis != '' and $request->kategori != '') {
            $data = Terbitan_Umum::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('penulis', $request->penulis)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->penulis == '' and $request->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $request->info_produk)
                ->get();
        } elseif ($request->judul != '' and $request->info_produk == '' and $request->penulis == '' and $request->kategori == '') {
            $data = Terbitan_Umum::where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->penulis != '' and $request->judul == '' and $request->info_produk == '' and $request->kategori == '') {
            $data = Terbitan_Umum::where('penulis', $request->penulis)
                ->get();
        } elseif ($request->kategori != '' and $request->judul == '' and $request->penulis == '' and $request->info_produk == '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->penulis == '' and $request->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->info_produk != '' and $request->penulis != '' and $request->judul == '' and $request->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $request->info_produk)
                ->where('penulis', $request->penulis)
                ->get();
        } elseif ($request->info_produk != '' and $request->kategori != '' and $request->penulis == '' and $request->judul == '') {
            $data = Terbitan_Umum::where('info_produk', $request->info_produk)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->judul != '' and $request->penulis != '' and $request->info_produk == '' and $request->kategori == '') {
            $data = Terbitan_Umum::where('judul', 'like', '%' . $request->judul . '%')
                ->where('penulis', $request->penulis)
                ->get();
        } elseif ($request->judul != '' and $request->kategori != '' and $request->info_produk == '' and $request->penulis == '') {
            $data = Terbitan_Umum::where('judul', 'like', '%' . $request->judul . '%')
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->penulis != '' and $request->kategori != '' and $request->info_produk == '' and $request->judul == '') {
            $data = Terbitan_Umum::where('penulis', $request->penulis)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->penulis != '' or $request->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $request->info_produk)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('penulis', $request->penulis)
                ->orWhere('kategori', 'like', '%' . $request->kategori . '%')
                ->get();
        } elseif ($request->info_produk != '' or $request->judul != '' and $request->penulis != '' and $request->kategori == '') {
            $data = Terbitan_Umum::where('penulis', $request->penulis)
                ->where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->orWhere('judul', 'like', '%' . $request->judul . '%')
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb3', compact('data', 'kategori', 'judul', 'info_produk', 'penulis'));
    }

    //===================================================================================================
    public function tampil_lb4(Request $request)
    {
        $kota = $request->kota;
        $nama_kegiatan = $request->nama_kegiatan;
        $sasaran = $request->sasaran;

        if ($request->kota == '' and $request->nama_kegiatan == '' and $request->sasaran == '') {
            $data = Penyuluhan::all();
        } elseif ($request->kota != '' and $request->nama_kegiatan == '' and $request->sasaran == '') {
            $data = Penyuluhan::where('kota', $request->kota)
                ->get();
        } elseif ($request->kota == '' and $request->nama_kegiatan != '' and $request->sasaran == '') {
            $data = Penyuluhan::where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->kota == '' and $request->nama_kegiatan == '' and $request->sasaran != '') {
            $data = Penyuluhan::where('sasaran', $request->sasaran)
                ->get();
        } elseif ($request->kota != '' and $request->nama_kegiatan != '' and $request->sasaran == '') {
            $data = Penyuluhan::where('kota', $request->kota)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->kota != '' and $request->nama_kegiatan == '' and $request->sasaran != '') {
            $data = Penyuluhan::where('kota', $request->kota)
                ->where('sasaran', $request->sasaran)
                ->get();
        } elseif ($request->kota == '' and $request->nama_kegiatan != '' and $request->sasaran != '') {
            $data = Penyuluhan::where('sasaran', $request->sasaran)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->kota != '' and $request->nama_kegiatan != '' and $request->sasaran != '') {
            $data = Penyuluhan::where('kota', $request->kota)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->where('sasaran', $request->sasaran)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb4', compact('data', 'nama_kegiatan', 'kota', 'sasaran'));
    }

    //===================================================================================================
    public function tampil_lb5(Request $request)
    {
        $tingkat = $request->tingkat;
        $nama = $request->nama;
        $instansi = $request->instansi;

        if ($request->tingkat == '' and $request->nama == '' and $request->instansi == '') {
            $data = Pesuluh::all();
        } elseif ($request->tingkat != '' and $request->nama == '' and $request->instansi == '') {
            $data = Pesuluh::where('tingkat', $request->tingkat)
                ->get();
        } elseif ($request->tingkat == '' and $request->nama != '' and $request->instansi == '') {
            $data = Pesuluh::where('nama', 'like', '%' . $request->nama . '%')
                ->get();
        } elseif ($request->tingkat == '' and $request->nama == '' and $request->instansi != '') {
            $data = Pesuluh::where('instansi', 'like', '%' . $request->instansi . '%')
                ->get();
        } elseif ($request->tingkat != '' and $request->nama != '' and $request->instansi == '') {
            $data = Pesuluh::where('tingkat', $request->tingkat)
                ->where('nama', 'like', '%' . $request->nama . '%')
                ->get();
        } elseif ($request->tingkat != '' and $request->nama == '' and $request->instansi != '') {
            $data = Pesuluh::where('tingkat', $request->tingkat)
                ->where('instansi', 'like', '%' . $request->instansi . '%')
                ->get();
        } elseif ($request->tingkat == '' and $request->nama != '' and $request->instansi != '') {
            $data = Pesuluh::where('instansi', 'like', '%' . $request->instansi . '%')
                ->where('nama', 'like', '%' . $request->nama . '%')
                ->get();
        } elseif ($request->tingkat != '' and $request->nama != '' and $request->instansi != '') {
            $data = Pesuluh::where('tingkat', $request->tingkat)
                ->where('nama', 'like', '%' . $request->nama . '%')
                ->where('instansi', 'like', '%' . $request->instansi . '%')
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb5', compact('data', 'nama', 'tingkat', 'instansi'));
    }

    //===================================================================================================
    public function tampil_lb6(Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $kategori = $request->kategori;
        $tahun = $request->tahun;
        $deskripsi = $request->deskripsi;

        if ($request->kategori == '' and $request->tahun == '' and $request->deskripsi == '') {
            $data = Penghargaan_Bahasa::all();
        } elseif ($request->kategori != '' and $request->tahun == '' and $request->deskripsi == '') {
            $data = Penghargaan_Bahasa::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->kategori == '' and $request->tahun != '' and $request->deskripsi == '') {
            $data = Penghargaan_Bahasa::where('tahun', $request->tahun)
                ->get();
        } elseif ($request->kategori == '' and $request->tahun == '' and $request->deskripsi != '') {
            $data = Penghargaan_Bahasa::where('deskripsi', $request->deskripsi)
                ->get();
        } elseif ($request->kategori != '' and $request->tahun != '' and $request->deskripsi == '') {
            $data = Penghargaan_Bahasa::where('kategori', $request->kategori)
                ->where('tahun', $request->tahun)
                ->get();
        } elseif ($request->kategori != '' and $request->tahun == '' and $request->deskripsi != '') {
            $data = Penghargaan_Bahasa::where('deskripsi', $request->deskripsi)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->kategori == '' and $request->tahun != '' and $request->deskripsi != '') {
            $data = Penghargaan_Bahasa::where('deskripsi', $request->deskripsi)
                ->where('tahun', $request->tahun)
                ->get();
        } elseif ($request->kategori != '' and $request->tahun != '' and $request->deskripsi != '') {
            $data = Penghargaan_Bahasa::where('tahun', $request->tahun)
                ->where('kategori', $request->kategori)
                ->where('deskripsi', $request->deskripsi)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb6', compact('data', 'kategori', 'tahun', 'deskripsi'));
    }

    //===================================================================================================
    public function tampil_lb7(Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $tahun = $request->tahun;
        $pemenang = $request->pemenang;

        if ($request->tahun == '' and $request->pemenang == '') {
            $data = Duta_Nasional::all();
        } elseif ($request->tahun != '' and $request->pemenang == '') {
            $data = Duta_Nasional::where('tahun', $request->tahun)
                ->get();
        } elseif ($request->tahun == '' and $request->pemenang != '') {
            $data = Duta_Nasional::where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        } elseif ($request->tahun != '' and $request->pemenang != '') {
            $data = Duta_Nasional::where('tahun', $request->tahun)
                ->where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb7', compact('data', 'pemenang', 'tahun'));
    }

    //===================================================================================================
    public function tampil_lb8(Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $tahun = $request->tahun;
        $pemenang = $request->pemenang;

        if ($request->tahun == '' and $request->pemenang == '') {
            $data = Duta_Provinsi::all();
        } elseif ($request->tahun != '' and $request->pemenang == '') {
            $data = Duta_Provinsi::where('tahun', $request->tahun)
                ->get();
        } elseif ($request->tahun == '' and $request->pemenang != '') {
            $data = Duta_Provinsi::where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        } elseif ($request->tahun != '' and $request->pemenang != '') {
            $data = Duta_Provinsi::where('tahun', $request->tahun)
                ->where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KEBAHASAAN.tampil_lb8', compact('data', 'pemenang', 'tahun'));
    }

    //LAPORAN S 3
    //===================================================================================================
    public function tampil_lc1(Request $request)
    {
        $nama_kegiatan = $request->nama_kegiatan;
        $kota = $request->kota;

        if ($request->nama_kegiatan == '' and $request->kota == '') {
            $data = Bengkel_Sastra_Dan_Bahasa::all();
        } elseif ($request->nama_kegiatan != '' and $request->kota == '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->nama_kegiatan == '' and $request->kota != '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('kota', $request->kota)
                ->get();
        } elseif ($request->nama_kegiatan != '' and $request->kota != '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('kota', $request->kota)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KESASTRAAN.tampil_lc1', compact('data', 'nama_kegiatan', 'kota'));
    }

    //===================================================================================================
    public function tampil_lc2(Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $kategori = $request->kategori;
        $tahun = $request->tahun;
        $deskripsi = $request->deskripsi;

        if ($request->kategori == '' and $request->tahun == '' and $request->deskripsi == '') {
            $data = Penghargaan_Sastra::all();
        } elseif ($request->kategori != '' and $request->tahun == '' and $request->deskripsi == '') {
            $data = Penghargaan_Sastra::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->kategori == '' and $request->tahun != '' and $request->deskripsi == '') {
            $data = Penghargaan_Sastra::where('tahun', $request->tahun)
                ->get();
        } elseif ($request->kategori == '' and $request->tahun == '' and $request->deskripsi != '') {
            $data = Penghargaan_Sastra::where('deskripsi', $request->deskripsi)
                ->get();
        } elseif ($request->kategori != '' and $request->tahun != '' and $request->deskripsi == '') {
            $data = Penghargaan_Sastra::where('kategori', $request->kategori)
                ->where('tahun', $request->tahun)
                ->get();
        } elseif ($request->kategori != '' and $request->tahun == '' and $request->deskripsi != '') {
            $data = Penghargaan_Sastra::where('deskripsi', $request->deskripsi)
                ->where('kategori', $request->kategori)
                ->get();
        } elseif ($request->kategori == '' and $request->tahun != '' and $request->deskripsi != '') {
            $data = Penghargaan_Sastra::where('deskripsi', $request->deskripsi)
                ->where('tahun', $request->tahun)
                ->get();
        } elseif ($request->kategori != '' and $request->tahun != '' and $request->deskripsi != '') {
            $data = Penghargaan_Sastra::where('tahun', $request->tahun)
                ->where('kategori', $request->kategori)
                ->where('deskripsi', $request->deskripsi)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KESASTRAAN.tampil_lc2', compact('data', 'kategori', 'tahun', 'deskripsi'));
    }

    //===================================================================================================
    public function tampil_lc3(Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $pemenang = $request->pemenang;
        $tahun = $request->tahun;

        if ($request->tahun == '' and $request->pemenang == '') {
            $data = Musikalisasi_Puisi_Nasional::all();
        } else if ($request->tahun != '' and $request->pemenang == '') {
            $data = Musikalisasi_Puisi_Nasional::where('tahun', $request->tahun)
                ->get();
        } else if ($request->tahun == '' and $request->pemenang != '') {
            $data = Musikalisasi_Puisi_Nasional::where('pemenang_1', $request->pemenang)
                ->orWhere('pemenang_2', $request->pemenang)
                ->orWhere('pemenang_3', $request->pemenang)
                ->get();
        } else {
            $data = Musikalisasi_Puisi_Nasional::where('tahun', $request->tahun)
                ->where('pemenang_1', $request->pemenang)
                ->orWhere('pemenang_2', $request->pemenang)
                ->orWhere('pemenang_3', $request->pemenang)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KESASTRAAN.tampil_lc3', compact('data', 'pemenang', 'tahun'));
    }

    //===================================================================================================
    public function tampil_lc4(Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $pemenang = $request->pemenang;
        $tahun = $request->tahun;

        if ($request->tahun == '' and $request->pemenang == '') {
            $data = Musikalisasi_Puisi_Provinsi::all();
        } else if ($request->tahun != '' and $request->pemenang == '') {
            $data = Musikalisasi_Puisi_Provinsi::where('tahun', $request->tahun)
                ->get();
        } else if ($request->tahun == '' and $request->pemenang != '') {
            $data = Musikalisasi_Puisi_Provinsi::where('pemenang_1', $request->pemenang)
                ->orWhere('pemenang_2', $request->pemenang)
                ->orWhere('pemenang_3', $request->pemenang)
                ->get();
        } else {
            $data = Musikalisasi_Puisi_Provinsi::where('tahun', $request->tahun)
                ->where('pemenang_1', $request->pemenang)
                ->orWhere('pemenang_2', $request->pemenang)
                ->orWhere('pemenang_3', $request->pemenang)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KESASTRAAN.tampil_lc4', compact('data', 'pemenang', 'tahun'));
    }

    //LAPORAN S 4
    //===================================================================================================
    public function tampil_ld1(Request $request)
    {
        $kota = $request->kota;
        $nama_komunitas = $request->nama_komunitas;
        $alamat = $request->alamat;

        if ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::all();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::where('kota', $request->kota)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('kota', $request->kota)
                ->where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('alamat', $request->alamat)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->where('alamat', $request->alamat)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KOMUNITAS.tampil_ld1', compact('data', 'kota', 'nama_komunitas', 'alamat'));
    }

    //===================================================================================================
    public function tampil_ld2(Request $request)
    {
        $kota = $request->kota;
        $nama_komunitas = $request->nama_komunitas;
        $alamat = $request->alamat;

        if ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Sastra::all();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Sastra::where('kota', $request->kota)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Sastra::where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Sastra::where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('kota', $request->kota)
                ->where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('alamat', $request->alamat)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->where('alamat', $request->alamat)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.KOMUNITAS.tampil_ld2', compact('data', 'kota', 'nama_komunitas', 'alamat'));
    }

    //LAPORAN S 5
    //===================================================================================================
    public function tampil_le1(Request $request)
    {
        $request->validate([
            'tahun_terbit' => ['nullable', 'numeric'],
        ]);

        $tahun_terbit = $request->tahun_terbit;
        $judul = $request->judul;
        $peneliti = $request->peneliti;
        $abstrak = $request->abstrak;

        if ($request->tahun_terbit == '' and $request->judul == '' and $request->peneliti == '' and $request->abstrak == '') {
            $data = Penelitian::all();
        } elseif ($request->tahun_terbit != '' and $request->judul != '' and $request->peneliti != '' and $request->abstrak != '') {
            $data = Penelitian::where('tahun_terbit', $request->tahun_terbit)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('peneliti', $request->peneliti)
                ->where('abstrak', 'like', '%' . $request->abstrak . '%')
                ->get();
        } elseif ($request->tahun_terbit != '' and $request->judul == '' and $request->peneliti == '' and $request->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $request->tahun_terbit)
                ->get();
        } elseif ($request->judul != '' and $request->tahun_terbit == '' and $request->peneliti == '' and $request->abstrak == '') {
            $data = Penelitian::where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->peneliti != '' and $request->judul == '' and $request->tahun_terbit == '' and $request->abstrak == '') {
            $data = Penelitian::where('peneliti', $request->peneliti)
                ->get();
        } elseif ($request->abstrak != '' and $request->judul == '' and $request->peneliti == '' and $request->tahun_terbit == '') {
            $data = Penelitian::where('abstrak', 'like', '%' . $request->abstrak . '%')
                ->get();
        } elseif ($request->tahun_terbit != '' and $request->judul != '' and $request->peneliti == '' and $request->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $request->tahun_terbit)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->get();
        } elseif ($request->tahun_terbit != '' and $request->peneliti != '' and $request->judul == '' and $request->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $request->tahun_terbit)
                ->where('peneliti', $request->peneliti)
                ->get();
        } elseif ($request->tahun_terbit != '' and $request->abstrak != '' and $request->peneliti == '' and $request->judul == '') {
            $data = Penelitian::where('tahun_terbit', $request->tahun_terbit)
                ->where('abstrak', 'like', '%' . $request->abstrak . '%')
                ->get();
        } elseif ($request->judul != '' and $request->peneliti != '' and $request->tahun_terbit == '' and $request->abstrak == '') {
            $data = Penelitian::where('judul', 'like', '%' . $request->judul . '%')
                ->where('peneliti', $request->peneliti)
                ->get();
        } elseif ($request->judul != '' and $request->abstrak != '' and $request->tahun_terbit == '' and $request->peneliti == '') {
            $data = Penelitian::where('judul', 'like', '%' . $request->judul . '%')
                ->where('abstrak', 'like', '%' . $request->abstrak . '%')
                ->get();
        } elseif ($request->peneliti != '' and $request->abstrak != '' and $request->tahun_terbit == '' and $request->judul == '') {
            $data = Penelitian::where('peneliti', $request->peneliti)
                ->where('abstrak', 'like', '%' . $request->abstrak . '%')
                ->get();
        } elseif ($request->tahun_terbit != '' and $request->judul != '' and $request->peneliti != '' or $request->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $request->tahun_terbit)
                ->where('judul', 'like', '%' . $request->judul . '%')
                ->where('peneliti', $request->peneliti)
                ->orWhere('abstrak', 'like', '%' . $request->abstrak . '%')
                ->get();
        } elseif ($request->tahun_terbit != '' or $request->judul != '' and $request->peneliti != '' and $request->abstrak == '') {
            $data = Penelitian::where('peneliti', $request->peneliti)
                ->where('abstrak', 'like', '%' . $request->abstrak . '%')
                ->where('tahun_terbit', $request->tahun_terbit)
                ->orWhere('judul', 'like', '%' . $request->judul . '%')
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return view('LAPORAN.PENELITIAN.tampil_le1', compact('data', 'peneliti', 'abstrak', 'tahun_terbit', 'judul'));
    }
}
