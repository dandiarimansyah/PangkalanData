<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

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

class GrafikController extends Controller
{
    private $tahun_ini;

    public function __construct()
    {
        $this->tahun_ini = Carbon::now()->format('Y');
    }

    //GRAFIK S 1
    public function ga1(Request $request)
    {
        $tahun_awal = 2016;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        foreach ($tahun as $a) {
            $temp = Anggaran::where('tahun_anggaran', $a)->where('validasi', 'sudah')->first();
            if ($temp != null) {
                $total[] = $temp["nilai_anggaran"];
            } else {
                $total[] = null;
            }
        }

        return view('GRAFIK.SEKRETARIAT.ga1', compact('tahun_awal', 'tahun_akhir', 'tahun', 'total'));
    }

    public function ga2(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Kerja_Sama::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $INTERNAL_T = [];
        $EKSTERNAL_T = [];

        // foreach ($data as $a) {
        // $tahun[] = $a->tahun;
        // }

        foreach ($tahun as $a) {
            $INTERNAL_T[] = Kerja_Sama::where('kategori', 'Internal')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $EKSTERNAL_T[] = Kerja_Sama::where('kategori', 'Eksternal')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.SEKRETARIAT.ga2', compact('tahun_awal', 'tahun_akhir', 'tahun', 'INTERNAL_T', 'EKSTERNAL_T'));
    }
    public function ga3(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Tanah_Bangunan::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->where('validasi', 'sudah')->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $total = [];

        foreach ($tahun as $a) {
            // $tahun[] = $a->tahun;
            $total[] = Tanah_Bangunan::where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.SEKRETARIAT.ga3', compact('tahun_awal', 'tahun_akhir', 'tahun', 'total'));
    }
    public function ga4(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Perpustakaan::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->where('validasi', 'sudah')->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $total = [];

        foreach ($tahun as $a) {
            // $tahun[] = $a->tahun;
            $total[] = Perpustakaan::where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.SEKRETARIAT.ga4', compact('tahun_awal', 'tahun_akhir', 'tahun', 'total'));
    }

    //GRAFIK S 2
    public function gb1(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Kamus::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $KAMUS_T = [];
        $ENSIKLOPEDIA_T = [];
        $TESAURUS_T = [];
        $GLOSARIUM_T = [];
        $LEMA_T = [];

        // foreach ($tahun as $a) {
        // $tahun[] = $a->tahun;
        // }

        foreach ($tahun as $a) {
            $KAMUS_T[] = Kamus::where('kategori', 'KAMUS')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $ENSIKLOPEDIA_T[] = Kamus::where('kategori', 'ENSIKLOPEDIA')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $TESAURUS_T[] = Kamus::where('kategori', 'TESAURUS')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $GLOSARIUM_T[] = Kamus::where('kategori', 'GLOSARIUM')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $LEMA_T[] = Kamus::where('kategori', 'LEMA')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.KEBAHASAAN.gb1', compact('tahun_awal', 'tahun_akhir', 'tahun', 'KAMUS_T', 'ENSIKLOPEDIA_T', 'TESAURUS_T', 'GLOSARIUM_T', 'LEMA_T'));
    }
    public function gb2(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Jurnal::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->where('validasi', 'sudah')->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $JURNAL_T = [];
        $MAJALAH_T = [];

        // foreach ($tahun as $a) {
        // $tahun[] = $a->tahun;
        // }

        foreach ($tahun as $a) {
            $JURNAL_T[] = Jurnal::where('kategori', 'JURNAL')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $MAJALAH_T[] = Jurnal::where('kategori', 'MAJALAH')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.KEBAHASAAN.gb2', compact('tahun_awal', 'tahun_akhir', 'tahun', 'JURNAL_T', 'MAJALAH_T'));
    }
    public function gb3(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        $data = Terbitan_Umum::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->where('validasi', 'sudah')->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $BAHASA_T = [];
        $SASTRA_T = [];

        // foreach ($tahun as $a) {
        // $tahun[] = $a->tahun;
        // }

        foreach ($tahun as $a) {
            $BAHASA_T[] = Terbitan_Umum::where('kategori', 'Bahasa')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $SASTRA_T[] = Terbitan_Umum::where('kategori', 'Sastra')->where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.KEBAHASAAN.gb3', compact('tahun_awal', 'tahun_akhir', 'tahun', 'BAHASA_T', 'SASTRA_T'));
    }
    public function gb4(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Penyuluhan::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->where('validasi', 'sudah')->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $total = [];

        foreach ($tahun as $a) {
            // $tahun[] = $a->tahun;
            $total[] = Penyuluhan::where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.KEBAHASAAN.gb4', compact('tahun_awal', 'tahun_akhir', 'tahun', 'total'));
    }

    //GRAFIK S 3
    public function gc1(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Bengkel_Sastra_Dan_Bahasa::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")
        //     ->where('validasi', 'sudah')->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $total = [];

        foreach ($tahun as $a) {
            // $tahun[] = $a->tahun;
            $total[] = Bengkel_Sastra_Dan_Bahasa::where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.KESASTRAAN.gc1', compact('tahun_awal', 'tahun_akhir', 'tahun', 'total'));
    }

    //GRAFIK S 4
    public function gd1(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        foreach ($tahun as $a) {
            $BAHASA_T[] = Komunitas_Bahasa::where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
            $SASTRA_T[] = Komunitas_Sastra::where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.KOMUNITAS.gd1', compact('tahun_awal', 'tahun_akhir', 'tahun', 'BAHASA_T', 'SASTRA_T'));
    }

    //GRAFIK S 5
    public function ge1(Request $request)
    {
        $tahun_awal = 2018;
        $tahun_akhir = $this->tahun_ini;
        if ($request->awal != null and $request->akhir != null) {
            $tahun_awal = $request->awal;
            $tahun_akhir = $request->akhir;
        } elseif ($request->awal != null) {
            $tahun_awal = $request->awal;
        } elseif ($request->akhir != null) {
            $tahun_akhir = $request->akhir;
        }

        $tahun = range($tahun_awal, $tahun_akhir);

        // $data = Penelitian::selectRaw("DATE_FORMAT(created_at, '%Y') AS tahun, COUNT(*) AS total")->where('validasi', 'sudah')->groupBy('tahun')->get();

        // menyiapkan data untuk chart
        // $tahun = [];
        $total = [];

        foreach ($tahun as $a) {
            // $tahun[] = $a->tahun;
            $total[] = Penelitian::where('validasi', 'sudah')->whereYear('created_at', '=', $a)->count();
        }

        return view('GRAFIK.PENELITIAN.ge1', compact('tahun_awal', 'tahun_akhir', 'tahun', 'total'));
    }
}
