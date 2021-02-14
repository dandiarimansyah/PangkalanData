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
        return view('LAPORAN.KEBAHASAAN.tampil_lb4', compact('data'));
    }
    public function tampil_lb5(Request $request)
    {
        return view('LAPORAN.KEBAHASAAN.tampil_lb5', compact('data'));
    }
    public function tampil_lb6(Request $request)
    {
        return view('LAPORAN.KEBAHASAAN.tampil_lb6', compact('data'));
    }
    public function tampil_lb7(Request $request)
    {
        return view('LAPORAN.KEBAHASAAN.tampil_lb7', compact('data'));
    }
    public function tampil_lb8(Request $request)
    {
        return view('LAPORAN.KEBAHASAAN.tampil_lb8', compact('data'));
    }

    //LAPORAN S 3
    public function tampil_lc1(Request $request)
    {
        return view('LAPORAN.KESASTRAAN.tampil_lc1', compact('data'));
    }
    public function tampil_lc2(Request $request)
    {
        return view('LAPORAN.KESASTRAAN.tampil_lc2', compact('data'));
    }
    public function tampil_lc3(Request $request)
    {
        return view('LAPORAN.KESASTRAAN.tampil_lc3', compact('data'));
    }
    public function tampil_lc4(Request $request)
    {
        return view('LAPORAN.KESASTRAAN.tampil_lc4', compact('data'));
    }

    //LAPORAN S 4
    public function tampil_ld1(Request $request)
    {
        return view('LAPORAN.KOMUNITAS.tampil_ld1', compact('data'));
    }
    public function tampil_ld2(Request $request)
    {
        return view('LAPORAN.KOMUNITAS.tampil_ld2', compact('data'));
    }

    //LAPORAN S 5
    public function tampil_le1(Request $request)
    {
        return view('LAPORAN.PENELITIAN.tampil_le1', compact('data'));
    }
}
