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

use PDF;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\AnggaranExport;
use App\Exports\Bengkel_Sastra_Dan_BahasaExport;
use App\Exports\Duta_NasionalExport;
use App\Exports\Duta_ProvinsiExport;
use App\Exports\InventarisasiExport;
use App\Exports\JurnalExport;
use App\Exports\KamusExport;
use App\Exports\Realisasi_AnggaranExport;
use App\Exports\KepegawaianExport;
use App\Exports\Kerja_SamaExport;
use App\Exports\Komunitas_BahasaExport;
use App\Exports\Komunitas_SastraExport;
use App\Exports\Musikalisasi_Puisi_NasionalExport;
use App\Exports\Musikalisasi_Puisi_ProvinsiExport;
use App\Exports\PenelitianExport;
use App\Exports\Penghargaan_BahasaExport;
use App\Exports\Penghargaan_SastraExport;
use App\Exports\PenyuluhanExport;
use App\Exports\PerpustakaanExport;
use App\Exports\PesuluhExport;
use App\Exports\Tanah_BangunanExport;
use App\Exports\Terbitan_UmumExport;


class ExportController extends Controller
{
    //PDF S 1
    //=======================================================================================
    public function pdf_a1(Request $request)
    {
        if ($request->pilih == 'tahun' and $request->tahun_anggaran != '') {
            $data = Anggaran::where('tahun_anggaran', $request->tahun_anggaran)
                ->get();
        } else {
            $data = Anggaran::all();
        }
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a1', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Anggaran.pdf');
    }

    //=======================================================================================
    public function pdf_a2(Request $request)
    {
        if ($request->pilih == 'tahun' and $request->tahun_anggaran != '') {
            $data = Realisasi_Anggaran::where('tahun_anggaran', $request->tahun_anggaran)
                ->get();
        } else {
            $data = Realisasi_Anggaran::all();
        }
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a2', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Realisasi Anggaran.pdf');
    }

    //=======================================================================================
    public function pdf_a3(Request $request)
    {
        $data = Kepegawaian::all();
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a3', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Kepegawaian.pdf');
    }

    //=======================================================================================
    public function pdf_a4(Request $request)
    {
        if ($request->kategori == 'semua' and $request->perihal == '') {
            $data = Kerja_Sama::all();
        } else {
            $data = Kerja_Sama::where('perihal', $request->perihal)
                ->orWhere('kategori', $request->kategori)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a4', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Kerja Sama.pdf');
    }

    //======================================================================================= 
    public function pdf_a5(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a5', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Tanah dan Bangunan.pdf');
    }

    //=======================================================================================
    public function pdf_a6(Request $request)
    {
        $data = Perpustakaan::all();
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a6', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Perpustakaan.pdf');
    }

    //=======================================================================================
    public function pdf_a7(Request $request)
    {
        $data = Inventarisasi::all();
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a7', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Inventarisasi BMN.pdf');
    }

    //PDF S 2
    //=======================================================================================
    public function pdf_b1(Request $request)
    {
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b1', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Kamus/Ensiklopedia.pdf');
    }

    //=======================================================================================
    public function pdf_b2(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b2', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Jurnal/Majalah.pdf');
    }

    //=======================================================================================
    public function pdf_b3(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b3', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Terbitan Umum.pdf');
    }

    //=======================================================================================
    public function pdf_b4(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b4', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Penyuluhan.pdf');
    }

    //=======================================================================================
    public function pdf_b5(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b5', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Pesuluh.pdf');
    }

    //=======================================================================================
    public function pdf_b6(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b6', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Penghargaan Bahasa.pdf');
    }

    //=======================================================================================
    public function pdf_b7(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b7', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Duta Bahasa Nasional.pdf');
    }

    //=======================================================================================
    public function pdf_b8(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KEBAHASAAN.b8', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Duta Bahasa Provinsi.pdf');
    }

    //PDF S 3
    //=======================================================================================
    public function pdf_c1(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KESASTRAAN.c1', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Bengkel Sastra dan Bahasa.pdf');
    }

    //=======================================================================================
    public function pdf_c2(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KESASTRAAN.c2', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Penghargaan Sastra.pdf');
    }

    //=======================================================================================
    public function pdf_c3(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KESASTRAAN.c3', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Musikalisasi Puisi Nasional.pdf');
    }

    //=======================================================================================
    public function pdf_c4(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KESASTRAAN.c4', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Musikalisasi Puisi Provinsi.pdf');
    }

    //PDF S 4
    //=======================================================================================
    public function pdf_d1(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KOMUNITAS.d1', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Komunitas Bahasa.pdf');
    }

    //=======================================================================================
    public function pdf_d2(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.KOMUNITAS.d2', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Komunitas Sastra.pdf');
    }

    //PDF S 5
    //=======================================================================================
    public function pdf_e1(Request $request)
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
        $data = $data->where('validasi', 'sudah');

        $pdf = PDF::loadView('PDF.PENELITIAN.e1', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan Penelitian.pdf');
    }

    //=======================================================================================
    //=======================================================================================
    //=======================================================================================
    //EXCEL S 1
    public function excel_a1(Request $request)
    {
        $export = new AnggaranExport($request->pilih, $request->tahun_anggaran);

        return Excel::download($export, 'Laporan Anggaran Excel.xlsx');
    }
    //=======================================================================================
    public function excel_a2(Request $request)
    {
        $export = new Realisasi_AnggaranExport($request->pilih, $request->tahun_anggaran);

        return Excel::download($export, 'Laporan Realisasi Anggaran Excel.xlsx');
    }
    //=======================================================================================
    public function excel_a3(Request $request)
    {
        $export = new KepegawaianExport;

        return Excel::download($export, 'Laporan Kepegawaian Excel.xlsx');
    }
    //=======================================================================================
    public function excel_a4(Request $request)
    {
        $export = new Kerja_SamaExport($request->kategori, $request->perihal);

        return Excel::download($export, 'Laporan Kerja Sama Excel.xlsx');
    }
    //=======================================================================================
    public function excel_a5(Request $request)
    {
        $export = new Tanah_BangunanExport($request->status_tanah, $request->status_bangunan);

        return Excel::download($export, 'Laporan Tanah dan Bangunan Excel.xlsx');
    }
    //=======================================================================================
    public function excel_a6(Request $request)
    {
        $export = new PerpustakaanExport;

        return Excel::download($export, 'Laporan Perpustakaan Excel.xlsx');
    }
    //=======================================================================================
    public function excel_a7(Request $request)
    {
        $export = new InventarisasiExport;

        return Excel::download($export, 'Laporan Inventarisasi BMN Excel.xlsx');
    }
    //=======================================================================================
    //EXCEL S 2
    public function excel_b1(Request $request)
    {
        $export = new KamusExport($request->info_produk, $request->judul, $request->tim_redaksi, $request->kategori);

        return Excel::download($export, 'Laporan Kamus/Ensiklopedia Excel.xlsx');
    }
    //=======================================================================================
    public function excel_b2(Request $request)
    {
        $export = new JurnalExport($request->info_produk, $request->judul, $request->tim_redaksi, $request->kategori);

        return Excel::download($export, 'Laporan Jurnal/Majalah Excel.xlsx');
    }
    //=======================================================================================
    public function excel_b3(Request $request)
    {
        $export = new Terbitan_UmumExport($request->info_produk, $request->judul, $request->penulis, $request->kategori);

        return Excel::download($export, 'Laporan Terbitan Umum Excel.xlsx');
    }
    //=======================================================================================
    public function excel_b4(Request $request)
    {
        $export = new PenyuluhanExport($request->kota, $request->nama_kegiatan, $request->sasaran, $request->provinsi);

        return Excel::download($export, 'Laporan Penyuluhan Excel.xlsx');
    }
    //=======================================================================================
    public function excel_b5(Request $request)
    {
        $export = new PesuluhExport($request->tingkat, $request->nama, $request->instansi);

        return Excel::download($export, 'Laporan Pesuluh Excel.xlsx');
    }
    //=======================================================================================
    public function excel_b6(Request $request)
    {
        $export = new Penghargaan_BahasaExport($request->kategori, $request->tahun, $request->deskripsi);

        return Excel::download($export, 'Laporan Penghargaan Bahasa Excel.xlsx');
    }
    //=======================================================================================
    public function excel_b7(Request $request)
    {
        $export = new Duta_NasionalExport($request->tahun, $request->pemenang, $request->provinsi);

        return Excel::download($export, 'Laporan Duta Bahasa Nasional Excel.xlsx');
    }
    //=======================================================================================
    public function excel_b8(Request $request)
    {
        $export = new Duta_ProvinsiExport($request->tahun, $request->pemenang, $request->provinsi);

        return Excel::download($export, 'Laporan Duta Bahasa Provinsi Excel.xlsx');
    }
    //=======================================================================================
    //EXCEL S 3
    public function excel_c1(Request $request)
    {
        $export = new Bengkel_Sastra_Dan_BahasaExport($request->nama_kegiatan, $request->kota, $request->provinsi);

        return Excel::download($export, 'Laporan Bengkel Sastra dan Bahasa Excel.xlsx');
    }
    //=======================================================================================
    public function excel_c2(Request $request)
    {
        $export = new Penghargaan_SastraExport($request->kategori, $request->tahun, $request->deskripsi);

        return Excel::download($export, 'Laporan Penghargaan Sastra Excel.xlsx');
    }
    //=======================================================================================
    public function excel_c3(Request $request)
    {
        $export = new Musikalisasi_Puisi_NasionalExport($request->tahun, $request->pemenang);

        return Excel::download($export, 'Laporan Musikalisasi Puisi Nasional Excel.xlsx');
    }
    //=======================================================================================
    public function excel_c4(Request $request)
    {
        $export = new Musikalisasi_Puisi_ProvinsiExport($request->provinsi, $request->tahun, $request->pemenang);

        return Excel::download($export, 'Laporan Musikalisasi Puisi Provinsi Excel.xlsx');
    }
    //=======================================================================================
    //EXCEL S 4
    public function excel_d1(Request $request)
    {
        $export = new Komunitas_BahasaExport($request->kota, $request->nama_komunitas, $request->alamat, $request->provinsi);

        return Excel::download($export, 'Laporan Komunitas Bahasa Excel.xlsx');
    }
    //=======================================================================================
    public function excel_d2(Request $request)
    {
        $export = new Komunitas_SastraExport($request->kota, $request->nama_komunitas, $request->alamat, $request->provinsi);

        return Excel::download($export, 'Laporan Komunitas Sastra Excel.xlsx');
    }
    //=======================================================================================
    //EXCEL S 5
    public function excel_e1(Request $request)
    {
        $export = new PenelitianExport($request->tahun_terbit, $request->judul, $request->peneliti, $request->abstrak);

        return Excel::download($export, 'Laporan Penelitian Excel.xlsx');
    }
}
