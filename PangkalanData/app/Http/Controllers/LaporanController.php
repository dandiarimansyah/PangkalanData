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
        $kepegawaian = Kepegawaian::all();

        return view('LAPORAN.SEKRETARIAT.la3', compact('kepegawaian'));
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
        $perpustakaan = Perpustakaan::all();

        return view('LAPORAN.SEKRETARIAT.la6', compact('perpustakaan'));
    }
    public function la7()
    {
        $inventarisasi = Inventarisasi::all();

        return view('LAPORAN.SEKRETARIAT.la7', compact('inventarisasi'));
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
    public function tampil_la1(Request $request)
    {
        if ($request->pilih == 'tahun' and $request->tahun_anggaran != '') {
            $data = Anggaran::where('tahun_anggaran', $request->tahun_anggaran)
                ->get();
        } else {
            $data = Anggaran::all();
        }

        return view('LAPORAN.SEKRETARIAT.tampil_la1', compact('data'));
    }
    public function tampil_la2(Request $request)
    {
        if ($request->pilih == 'tahun' and $request->tahun_anggaran != '') {
            $data = Realisasi_Anggaran::where('tahun_anggaran', $request->tahun_anggaran)
                ->get();
        } else {
            $data = Realisasi_Anggaran::all();
        }

        return view('LAPORAN.SEKRETARIAT.tampil_la2', compact('data'));
    }
    public function tampil_la3(Request $request)
    {
        return view('LAPORAN.SEKRETARIAT.tampil_la3', compact('data'));
    }
    public function tampil_la4(Request $request)
    {
        if ($request->kategori == 'semua' and $request->perihal == '') {
            $data = Kerja_Sama::all();
        } else {
            $data = Kerja_Sama::where('perihal', $request->perihal)
                ->orWhere('kategori', $request->kategori)
                ->get();
        }

        return view('LAPORAN.SEKRETARIAT.tampil_la4', compact('data'));
    }
    public function tampil_la5(Request $request)
    {
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
        return view('LAPORAN.SEKRETARIAT.tampil_la5', compact('data'));
    }
    public function tampil_la6(Request $request)
    {
        return view('LAPORAN.SEKRETARIAT.tampil_la6', compact('data'));
    }
    public function tampil_la7(Request $request)
    {
        return view('LAPORAN.SEKRETARIAT.tampil_la7', compact('data'));
    }

    //LAPORAN S 2
    public function tampil_lb1(Request $request)
    {
        // $j = $request->judul;
        // $t = $request->tim_redaksi;
        // $i = $request->info_produk;

        // if ($request->info_produk == '' and $request->judul == '' and $request->tim_redaksi == '') {
        //     $data = Kamus::where('kategori', $request->kategori)
        //         ->get();
        // } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi != '') {
        //     $data = Kamus::where('kategori', $request->kategori)
        //         ->where('info_produk', $request->info_produk)
        //         ->where('judul', $request->judul)
        //         ->where('tim_redaksi', $request->tim_redaksi)
        //         ->get();
        // } else {
        //     $data = Kamus::where('kategori', $request->kategori)
        //         ->where(function ($query) use ($j, $t, $i) {
        //             $query->where('judul', $j)
        //                 ->orWhere('tim_redaksi', $t)
        //                 ->orWhere('info_produk', $i);
        //         })
        //         ->get();
        // }

        if ($request->info_produk == '' and $request->judul == '' and $request->tim_redaksi == '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->tim_redaksi == '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul != '' and $request->tim_redaksi == '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul == '' and $request->tim_redaksi != '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi == '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->tim_redaksi != '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul != '' and $request->tim_redaksi != '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi != '') {
            $data = Kamus::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('judul', $request->judul)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        }

        return view('LAPORAN.KEBAHASAAN.tampil_lb1', compact('data'));
    }
    public function tampil_lb2(Request $request)
    {
        if ($request->info_produk == '' and $request->judul == '' and $request->tim_redaksi == '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->tim_redaksi == '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul != '' and $request->tim_redaksi == '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul == '' and $request->tim_redaksi != '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi == '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->tim_redaksi != '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul != '' and $request->tim_redaksi != '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->tim_redaksi != '') {
            $data = Jurnal::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('judul', $request->judul)
                ->where('tim_redaksi', $request->tim_redaksi)
                ->get();
        }
        return view('LAPORAN.KEBAHASAAN.tampil_lb2', compact('data'));
    }
    public function tampil_lb3(Request $request)
    {
        if ($request->info_produk == '' and $request->judul == '' and $request->penulis == '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->penulis == '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul != '' and $request->penulis == '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul == '' and $request->penulis != '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->where('penulis', $request->penulis)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->penulis == '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul == '' and $request->penulis != '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('penulis', $request->penulis)
                ->get();
        } elseif ($request->info_produk == '' and $request->judul != '' and $request->penulis != '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->where('penulis', $request->penulis)
                ->where('judul', $request->judul)
                ->get();
        } elseif ($request->info_produk != '' and $request->judul != '' and $request->penulis != '') {
            $data = Terbitan_Umum::where('kategori', $request->kategori)
                ->where('info_produk', $request->info_produk)
                ->where('judul', $request->judul)
                ->where('penulis', $request->penulis)
                ->get();
        }
        return view('LAPORAN.KEBAHASAAN.tampil_lb3', compact('data'));
    }
    public function tampil_lb4(Request $request)
    {
        if ($request->kota == '' and $request->nama_kegiatan == '' and $request->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->get();
        } elseif ($request->kota != '' and $request->nama_kegiatan == '' and $request->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->get();
        } elseif ($request->kota == '' and $request->nama_kegiatan != '' and $request->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->kota == '' and $request->nama_kegiatan == '' and $request->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->where('sasaran', $request->sasaran)
                ->get();
        } elseif ($request->kota != '' and $request->nama_kegiatan != '' and $request->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->kota != '' and $request->nama_kegiatan == '' and $request->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('sasaran', $request->sasaran)
                ->get();
        } elseif ($request->kota == '' and $request->nama_kegiatan != '' and $request->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->where('sasaran', $request->sasaran)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->kota != '' and $request->nama_kegiatan != '' and $request->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->where('sasaran', $request->sasaran)
                ->get();
        }
        return view('LAPORAN.KEBAHASAAN.tampil_lb4', compact('data'));
    }
    public function tampil_lb5(Request $request)
    {
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
        return view('LAPORAN.KEBAHASAAN.tampil_lb5', compact('data'));
    }
    public function tampil_lb6(Request $request)
    {
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
        return view('LAPORAN.KEBAHASAAN.tampil_lb6', compact('data'));
    }
    public function tampil_lb7(Request $request)
    {
        if ($request->tahun == '' and $request->pemenang == '') {
            $data = Duta_Nasional::where('provinsi', $request->provinsi)
                ->get();
        } elseif ($request->tahun != '' and $request->pemenang == '') {
            $data = Duta_Nasional::where('provinsi', $request->provinsi)
                ->where('tahun', $request->tahun)
                ->get();
        } elseif ($request->tahun == '' and $request->pemenang != '') {
            $data = Duta_Nasional::where('provinsi', $request->provinsi)
                ->where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        } elseif ($request->tahun != '' and $request->pemenang != '') {
            $data = Duta_Nasional::where('tahun', $request->tahun)
                ->where('provinsi', $request->provinsi)
                ->where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        }
        return view('LAPORAN.KEBAHASAAN.tampil_lb7', compact('data'));
    }
    public function tampil_lb8(Request $request)
    {
        if ($request->tahun == '' and $request->pemenang == '') {
            $data = Duta_Provinsi::where('provinsi', $request->provinsi)
                ->get();
        } elseif ($request->tahun != '' and $request->pemenang == '') {
            $data = Duta_Provinsi::where('provinsi', $request->provinsi)
                ->where('tahun', $request->tahun)
                ->get();
        } elseif ($request->tahun == '' and $request->pemenang != '') {
            $data = Duta_Provinsi::where('provinsi', $request->provinsi)
                ->where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        } elseif ($request->tahun != '' and $request->pemenang != '') {
            $data = Duta_Provinsi::where('tahun', $request->tahun)
                ->where('provinsi', $request->provinsi)
                ->where('pemenang_1_1', $request->pemenang)
                ->orWhere('pemenang_1_2', $request->pemenang)
                ->orWhere('pemenang_2_1', $request->pemenang)
                ->orWhere('pemenang_2_2', $request->pemenang)
                ->orWhere('pemenang_3_1', $request->pemenang)
                ->orWhere('pemenang_3_2', $request->pemenang)
                ->get();
        }
        return view('LAPORAN.KEBAHASAAN.tampil_lb8', compact('data'));
    }

    //LAPORAN S 3
    public function tampil_lc1(Request $request)
    {
        if ($request->nama_kegiatan == '' and $request->kota == '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->get();
        } elseif ($request->nama_kegiatan != '' and $request->kota == '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->nama_kegiatan == '' and $request->kota != '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->get();
        } elseif ($request->nama_kegiatan != '' and $request->kota != '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        }
        return view('LAPORAN.KESASTRAAN.tampil_lc1', compact('data'));
    }
    public function tampil_lc2(Request $request)
    {
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
        return view('LAPORAN.KESASTRAAN.tampil_lc2', compact('data'));
    }
    public function tampil_lc3(Request $request)
    {
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
        return view('LAPORAN.KESASTRAAN.tampil_lc3', compact('data'));
    }
    public function tampil_lc4(Request $request)
    {
        if ($request->tahun == '' and $request->pemenang == '') {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $request->provinsi)
                ->get();
        } else if ($request->tahun != '' and $request->pemenang == '') {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $request->provinsi)
                ->where('tahun', $request->tahun)
                ->get();
        } else if ($request->tahun == '' and $request->pemenang != '') {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $request->provinsi)
                ->where('pemenang_1', $request->pemenang)
                ->orWhere('pemenang_2', $request->pemenang)
                ->orWhere('pemenang_3', $request->pemenang)
                ->get();
        } else {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $request->provinsi)
                ->where('tahun', $request->tahun)
                ->where('pemenang_1', $request->pemenang)
                ->orWhere('pemenang_2', $request->pemenang)
                ->orWhere('pemenang_3', $request->pemenang)
                ->get();
        }
        return view('LAPORAN.KESASTRAAN.tampil_lc4', compact('data'));
    }

    //LAPORAN S 4
    public function tampil_ld1(Request $request)
    {
        if ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->where('alamat', $request->alamat)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->where('alamat', $request->alamat)
                ->get();
        }
        return view('LAPORAN.KOMUNITAS.tampil_ld1', compact('data'));
    }
    public function tampil_ld2(Request $request)
    {
        if ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat == '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat == '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas == '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('alamat', $request->alamat)
                ->get();
        } elseif ($request->kota == '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->where('alamat', $request->alamat)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->get();
        } elseif ($request->kota != '' and $request->nama_komunitas != '' and $request->alamat != '') {
            $data = Komunitas_Sastra::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_komunitas', $request->nama_komunitas)
                ->where('alamat', $request->alamat)
                ->get();
        }
        return view('LAPORAN.KOMUNITAS.tampil_ld2', compact('data'));
    }

    //LAPORAN S 5
    public function tampil_le1(Request $request)
    {
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
        return view('LAPORAN.PENELITIAN.tampil_le1', compact('data'));
    }
}
