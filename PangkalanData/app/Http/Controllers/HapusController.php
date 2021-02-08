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

class HapusController extends Controller
{
    public function hapus_a1($id)
    {
        $data = Anggaran::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/sekretariat/anggaran')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_a2($id)
    {
        $data = Realisasi_Anggaran::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/sekretariat/realisasi_anggaran')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_a3($id)
    {
        $data = Kepegawaian::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/sekretariat/kepegawaian')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_a4($id)
    {
        $data = Kerja_Sama::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/sekretariat/kerja_sama')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_a5($id)
    {
        $data = Tanah_Dan_Bangunan::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/sekretariat/tanah_dan_bangunan')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_a6($id)
    {
        $data = Perpustakaan::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/sekretariat/perpustakaan')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_a7($id)
    {
        $data = Inventarisasi_Bmn::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/sekretariat/inventarisasi_bmn')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b1($id)
    {
        $data = Kamus_Ensiklopedia::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/kamus_ensiklopedia')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b2($id)
    {
        $data = Jurnal_Majalah::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/jurnal_majalah')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b3($id)
    {
        $data = Terbitan_Umum::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/terbitan_umum')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b4($id)
    {
        $data = Penyuluhan::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/penyuluhan')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b5($id)
    {
        $data = Pesuluh::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/pesuluh')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b6($id)
    {
        $data = Penghargaan_Bahasa::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/penghargaan_bahasa')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b7($id)
    {
        $data = Duta_Nasional::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/duta_bahasa_nasional')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_b8($id)
    {
        $data = Duta_Provinsi::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kebahasaan/duta_bahasa_provinsi')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_c1($id)
    {
        $data = Bengkel_Sastra_Dan_Bahasa::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kesastraan/bengkel_sastra_dan_bahasa')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_c2($id)
    {
        $data = Penghargaan_Sastra::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kesastraan/penghargaan_sastra')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_c3($id)
    {
        $data = Musikalisasi_Puisi_Nasional::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kesastraan/musikalisasi_puisi_nasional')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_c4($id)
    {
        $data = Musikalisasi_Puisi_Provinsi::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/kesastraan/musikalisasi_puisi_provinsi')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_d1($id)
    {
        $data = Komunitas_Bahasa::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/komunitas/komunitas_bahasa')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_d2($id)
    {
        $data = Komunitas_Sastra::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/komunitas/komunitas_sastra')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function hapus_e1($id)
    {
        $data = Penelitian::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/operator/edit/penelitian/penelitian')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
