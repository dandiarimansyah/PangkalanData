<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bengkel_Sastra_Dan_Bahasa;
use App\Models\Duta_Nasional;
use App\Models\Duta_Provinsi;
use App\Models\Jurnal;
use App\Models\Kamus;
use App\Models\Kerja_Sama;
use App\Models\Musikalisasi_Puisi_Nasional;
use App\Models\Musikalisasi_Puisi_Provinsi;
use App\Models\Penelitian;
use App\Models\Penghargaan_Bahasa;
use App\Models\Penghargaan_Sastra;
use App\Models\Penyuluhan;
use App\Models\Tanah_Bangunan;
use App\Models\Terbitan_Umum;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    //=============================== MEDIA S 1 ===============================
    public function ma1()
    {
        $kerja_sama = Kerja_Sama::all();

        return view('MEDIA.SEKRETARIAT.ma1', compact('kerja_sama'));
    }

    public function store_ma1($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/kerja_sama');
        }

        $data = Kerja_Sama::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_ma1($id)
    {
        $data = Kerja_Sama::find($id);
        Storage::delete($data->media);

        $data = Kerja_Sama::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function ma2()
    {
        $tanah_bangunan = Tanah_Bangunan::all();

        return view('MEDIA.SEKRETARIAT.ma2', compact('tanah_bangunan'));
    }

    public function store_ma2($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/tanah_dan_bangunan');
        }

        $data = Tanah_Bangunan::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_ma2($id)
    {
        $data = Tanah_Bangunan::find($id);
        Storage::delete($data->media);

        $data = Tanah_Bangunan::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //============================================================== MEDIA S2
    public function mb1()
    {
        $kamus = Kamus::all();

        return view('MEDIA.KEBAHASAAN.mb1', compact('kamus'));
    }

    public function store_mb1($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/kamus_ensiklopedia');
        }

        $data = Kamus::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mb1($id)
    {
        $data = Kamus::find($id);
        Storage::delete($data->media);

        $data = Kamus::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mb2()
    {
        $jurnal = Jurnal::all();

        return view('MEDIA.KEBAHASAAN.mb2', compact('jurnal'));
    }

    public function store_mb2($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/jurnal_majalah');
        }

        $data = Jurnal::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mb2($id)
    {
        $data = Jurnal::find($id);
        Storage::delete($data->media);

        $data = Jurnal::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mb3()
    {
        $terbitan_umum = Terbitan_Umum::all();

        return view('MEDIA.KEBAHASAAN.mb3', compact('terbitan_umum'));
    }

    public function store_mb3($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/terbitan_umum');
        }

        $data = Terbitan_Umum::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mb3($id)
    {
        $data = Terbitan_Umum::find($id);
        Storage::delete($data->media);

        $data = Terbitan_Umum::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mb4()
    {
        $penyuluhan = Penyuluhan::all();

        return view('MEDIA.KEBAHASAAN.mb4', compact('penyuluhan'));
    }

    public function store_mb4($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/penyuluhan');
        }

        $data = Penyuluhan::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mb4($id)
    {
        $data = Penyuluhan::find($id);
        Storage::delete($data->media);

        $data = Penyuluhan::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mb5()
    {
        $penghargaan_bahasa = Penghargaan_Bahasa::all();

        return view('MEDIA.KEBAHASAAN.mb5', compact('penghargaan_bahasa'));
    }

    public function store_mb5($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/penghargaan_bahasa');
        }

        $data = Penghargaan_Bahasa::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mb5($id)
    {
        $data = Penghargaan_Bahasa::find($id);
        Storage::delete($data->media);

        $data = Penghargaan_Bahasa::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mb6()
    {
        $duta_nasional = Duta_Nasional::all();

        return view('MEDIA.KEBAHASAAN.mb6', compact('duta_nasional'));
    }

    public function store_mb6($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/duta_bahasa_nasional');
        }

        $data = Duta_Nasional::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mb6($id)
    {
        $data = Duta_Nasional::find($id);
        Storage::delete($data->media);

        $data = Duta_Nasional::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mb7()
    {
        $duta_provinsi = Duta_Provinsi::all();

        return view('MEDIA.KEBAHASAAN.mb7', compact('duta_provinsi'));
    }

    public function store_mb7($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/duta_bahasa_provinsi');
        }

        $data = Duta_Provinsi::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mb7($id)
    {
        $data = Duta_Provinsi::find($id);
        Storage::delete($data->media);

        $data = Duta_Provinsi::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }


    //============================================================== MEDIA S 3
    public function mc1()
    {
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::all();

        return view('MEDIA.KESASTRAAN.mc1', compact('bengkel_sastra_dan_bahasa'));
    }

    public function store_mc1($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/bengkel_sastra_dan_bahasa');
        }

        $data = Bengkel_Sastra_Dan_Bahasa::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mc1($id)
    {
        $data = Bengkel_Sastra_Dan_Bahasa::find($id);
        Storage::delete($data->media);

        $data = Bengkel_Sastra_Dan_Bahasa::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mc2()
    {
        $penghargaan_sastra = Penghargaan_Sastra::all();

        return view('MEDIA.KESASTRAAN.mc2', compact('penghargaan_sastra'));
    }

    public function store_mc2($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/penghargaan_sastra');
        }

        $data = Penghargaan_Sastra::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mc2($id)
    {
        $data = Penghargaan_Sastra::find($id);
        Storage::delete($data->media);

        $data = Penghargaan_Sastra::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mc3()
    {
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::all();

        return view('MEDIA.KESASTRAAN.mc3', compact('musikalisasi_puisi_nasional'));
    }

    public function store_mc3($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/musikalisasi_puisi_nasional');
        }

        $data = Musikalisasi_Puisi_Nasional::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mc3($id)
    {
        $data = Musikalisasi_Puisi_Nasional::find($id);
        Storage::delete($data->media);

        $data = Musikalisasi_Puisi_Nasional::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //==============================================================
    public function mc4()
    {
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::all();

        return view('MEDIA.KESASTRAAN.mc4', compact('musikalisasi_puisi_provinsi'));
    }

    public function store_mc4($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/musikalisasi_puisi_provinsi');
        }

        $data = Musikalisasi_Puisi_Provinsi::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_mc4($id)
    {
        $data = Musikalisasi_Puisi_Provinsi::find($id);
        Storage::delete($data->media);

        $data = Musikalisasi_Puisi_Provinsi::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }

    //============================================================== MEDIA S5
    public function me1()
    {
        $penelitian = Penelitian::all();

        return view('MEDIA.PENELITIAN.me1', compact('penelitian'));
    }

    public function store_me1($id, Request $request)
    {
        $request->validate([
            'media' => ['required'],
        ]);

        if ($request->media == null) {
            $media = null;
        } else {
            $media = $request->media->store('public/penelitian');
        }

        $data = Penelitian::where('id', $id)
            ->update([
                'media' => $media,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Diunggah!');
    }

    public function hapus_me1($id)
    {
        $data = Penelitian::find($id);
        Storage::delete($data->media);

        $data = Penelitian::where('id', $id)
            ->update([
                'media' => null,
            ]);

        return back()->with('toast_success', 'Dokumen Berhasil Dihapus!');;
    }
}
