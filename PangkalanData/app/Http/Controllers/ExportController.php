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


class ExportController extends Controller
{
    //PDF S 1
    public function pdf_a1(Request $request)
    {
        if ($request->pilih == 'tahun' and $request->tahun_anggaran != '') {
            $data = Anggaran::where('tahun_anggaran', $request->tahun_anggaran)
                ->get();
        } else {
            $data = Anggaran::all();
        }

        $pdf = PDF::loadView('PDF.SEKRETARIAT.a1', compact('data'));

        // return $pdf->stream();
        return $pdf->download('Laporan.pdf');
    }
    public function pdf_a2(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_a3(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_a4(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_a5(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_a6(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_a7(Request $request)
    {
        return $pdf->stream();
    }

    //PDF S 2
    public function pdf_b1(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_b2(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_b3(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_b4(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_b5(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_b6(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_b7(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_b8(Request $request)
    {
        return $pdf->stream();
    }

    //PDF S 3
    public function pdf_c1(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_c2(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_c3(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_c4(Request $request)
    {
        return $pdf->stream();
    }

    //PDF S 4
    public function pdf_d1(Request $request)
    {
        return $pdf->stream();
    }
    public function pdf_d2(Request $request)
    {
        return $pdf->stream();
    }

    //PDF S 5
    public function pdf_e1(Request $request)
    {
        return $pdf->stream();
    }

    //EXCEL S 1
    public function excel_a1(Request $request)
    {
        $export = new AnggaranExport($request->pilih, $request->tahun_anggaran);

        return Excel::download($export, 'Anggaran.xlsx');
    }

    public function excel_a2()
    {
        return $pdf->stream();
    }
    public function excel_a3()
    {
        return $pdf->stream();
    }
    public function excel_a4()
    {
        return $pdf->stream();
    }
    public function excel_a5()
    {
        return $pdf->stream();
    }
    public function excel_a6()
    {
        return $pdf->stream();
    }
    public function excel_a7()
    {
        return $pdf->stream();
    }

    //EXCEL S 2
    public function excel_b1()
    {
        return $pdf->stream();
    }
    public function excel_b2()
    {
        return $pdf->stream();
    }
    public function excel_b3()
    {
        return $pdf->stream();
    }
    public function excel_b4()
    {
        return $pdf->stream();
    }
    public function excel_b5()
    {
        return $pdf->stream();
    }
    public function excel_b6()
    {
        return $pdf->stream();
    }
    public function excel_b7()
    {
        return $pdf->stream();
    }
    public function excel_b8()
    {
        return $pdf->stream();
    }

    //EXCEL S 3
    public function excel_c1()
    {
        return $pdf->stream();
    }
    public function excel_c2()
    {
        return $pdf->stream();
    }
    public function excel_c3()
    {
        return $pdf->stream();
    }
    public function excel_c4()
    {
        return $pdf->stream();
    }

    //EXCEL S 4
    public function excel_d1()
    {
        return $pdf->stream();
    }
    public function excel_d2()
    {
        return $pdf->stream();
    }

    //EXCEL S 5
    public function excel_e1()
    {
        return $pdf->stream();
    }
}
