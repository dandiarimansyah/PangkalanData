<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\AnggaranImport;
use App\Imports\Bengkel_Sastra_Dan_BahasaImport;
use App\Imports\Duta_NasionalImport;
use App\Imports\Duta_ProvinsiImport;
use App\Imports\InventarisasiImport;
use App\Imports\JurnalImport;
use App\Imports\KamusImport;
use App\Imports\Realisasi_AnggaranImport;
use App\Imports\KepegawaianImport;
use App\Imports\Kerja_SamaImport;
use App\Imports\Komunitas_BahasaImport;
use App\Imports\Komunitas_SastraImport;
use App\Imports\Musikalisasi_Puisi_NasionalImport;
use App\Imports\Musikalisasi_Puisi_ProvinsiImport;
use App\Imports\PenelitianImport;
use App\Imports\Penghargaan_BahasaImport;
use App\Imports\Penghargaan_SastraImport;
use App\Imports\PenyuluhanImport;
use App\Imports\PerpustakaanImport;
use App\Imports\PesuluhImport;
use App\Imports\Tanah_BangunanImport;
use App\Imports\Terbitan_UmumImport;

class ImportController extends Controller
{
    //IMPORT S 1
    public function import_a1(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Anggaran', $namaFile);

        Excel::import(new AnggaranImport, public_path('/Anggaran/' . $namaFile));
        return redirect('/laporan/sekretariat/anggaran/tampil')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a2()
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Realisasi Anggaran', $namaFile);

        Excel::import(new Realisasi_AnggaranImport, public_path('/Realisasi Anggaran/' . $namaFile));
        return redirect('/laporan/sekretariat/realisasi_anggaran/tampil')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a3()
    {
    }
    public function import_a4()
    {
    }
    public function import_a5()
    {
    }
    public function import_a6()
    {
    }
    public function import_a7()
    {
    }

    //IMPORT S 1
    public function import_b1()
    {
    }
    public function import_b2()
    {
    }
    public function import_b3()
    {
    }
    public function import_b4()
    {
    }
    public function import_b5()
    {
    }
    public function import_b6()
    {
    }
    public function import_b7()
    {
    }
    public function import_b8()
    {
    }

    //IMPORT S 1
    public function import_c1()
    {
    }
    public function import_c2()
    {
    }
    public function import_c3()
    {
    }
    public function import_c4()
    {
    }

    //IMPORT S 1
    public function import_d1()
    {
    }
    public function import_d2()
    {
    }

    //IMPORT S 1
    public function import_e1()
    {
    }
}
