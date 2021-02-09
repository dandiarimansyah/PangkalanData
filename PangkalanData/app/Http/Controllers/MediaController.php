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

class MediaController extends Controller
{
    //MEDIA S 1
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

        return redirect('/media/sekretariat/kerja_sama')->with('toast_success', 'Media Berhasil Diunggah!');
    }


    public function ma2()
    {
        $tanah_bangunan = Tanah_Bangunan::all();

        return view('MEDIA.SEKRETARIAT.ma2', compact('tanah_bangunan'));
    }

    //MEDIA S 2
    public function mb1()
    {
        $kamus = Kamus::all();

        return view('MEDIA.KEBAHASAAN.mb1', compact('kamus'));
    }
    public function mb2()
    {
        $jurnal = Jurnal::all();

        return view('MEDIA.KEBAHASAAN.mb2', compact('jurnal'));
    }
    public function mb3()
    {
        $terbitan_umum = Terbitan_Umum::all();

        return view('MEDIA.KEBAHASAAN.mb3', compact('terbitan_umum'));
    }
    public function mb4()
    {
        $penyuluhan = Penyuluhan::all();

        return view('MEDIA.KEBAHASAAN.mb4', compact('penyuluhan'));
    }
    public function mb5()
    {
        $penghargaan_bahasa = Penghargaan_Bahasa::all();

        return view('MEDIA.KEBAHASAAN.mb5', compact('penghargaan_bahasa'));
    }
    public function mb6()
    {
        $duta_nasional = Duta_Nasional::all();

        return view('MEDIA.KEBAHASAAN.mb6', compact('duta_nasional'));
    }
    public function mb7()
    {
        $duta_provinsi = Duta_Provinsi::all();

        return view('MEDIA.KEBAHASAAN.mb7', compact('duta_provinsi'));
    }

    //MEDIA S 3
    public function mc1()
    {
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::all();

        return view('MEDIA.KESASTRAAN.mc1', compact('bengkel_sastra_dan_bahasa'));
    }
    public function mc2()
    {
        $penghargaan_sastra = Penghargaan_Sastra::all();

        return view('MEDIA.KESASTRAAN.mc2', compact('penghargaan_sastra'));
    }
    public function mc3()
    {
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::all();

        return view('MEDIA.KESASTRAAN.mc3', compact('musikalisasi_puisi_nasional'));
    }
    public function mc4()
    {
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::all();

        return view('MEDIA.KESASTRAAN.mc4', compact('musikalisasi_puisi_provinsi'));
    }

    //MEDIA S 5
    public function me1()
    {
        $penelitian = Penelitian::all();

        return view('MEDIA.PENELITIAN.me1', compact('penelitian'));
    }
}
