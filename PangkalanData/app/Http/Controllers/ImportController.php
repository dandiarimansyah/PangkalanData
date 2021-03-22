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
use App\Models\Pesuluh;
use App\Imports\PerpustakaanImport;
use App\Imports\PesuluhImport;
use App\Imports\Tanah_BangunanImport;
use App\Imports\Terbitan_UmumImport;

use Illuminate\Support\Facades\File;

class ImportController extends Controller
{
    //IMPORT S 1
    public function import_a1(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Anggaran', $namaFile);

        Excel::import(new AnggaranImport, public_path('/Anggaran/' . $namaFile));
        File::delete(public_path('/Anggaran/' . $namaFile));

        return redirect('/operator/edit/sekretariat/anggaran')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a2(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Realisasi Anggaran', $namaFile);

        Excel::import(new Realisasi_AnggaranImport, public_path('/Realisasi Anggaran/' . $namaFile));
        File::delete(public_path('/Realisasi Anggaran/' . $namaFile));

        return redirect('/operator/edit/sekretariat/realisasi_anggaran')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a3(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Kepegawaian', $namaFile);

        Excel::import(new KepegawaianImport, public_path('/Kepegawaian/' . $namaFile));
        File::delete(public_path('/Kepegawaian/' . $namaFile));

        return redirect('/operator/edit/sekretariat/kepegawaian')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a4(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Kerja Sama', $namaFile);

        Excel::import(new Kerja_SamaImport, public_path('/Kerja Sama/' . $namaFile));
        File::delete(public_path('/Kerja Sama/' . $namaFile));

        return redirect('/operator/edit/sekretariat/kerja_sama')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a5(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Tanah dan Bangunan', $namaFile);

        Excel::import(new Tanah_BangunanImport, public_path('/Tanah dan Bangunan/' . $namaFile));
        File::delete(public_path('/Tanah dan Bangunan/' . $namaFile));

        return redirect('/operator/edit/sekretariat/tanah_dan_bangunan')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a6(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Perpustakaan', $namaFile);

        Excel::import(new PerpustakaanImport, public_path('/Perpustakaan/' . $namaFile));
        File::delete(public_path('/Perpustakaan/' . $namaFile));

        return redirect('/operator/edit/sekretariat/perpustakaan')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_a7(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Inventarisasi BMN', $namaFile);

        Excel::import(new InventarisasiImport, public_path('/Inventarisasi BMN/' . $namaFile));
        File::delete(public_path('/Inventarisasi BMN/' . $namaFile));

        return redirect('/operator/edit/sekretariat/inventarisasi_bmn')->with('toast_success', 'Import Data Berhasil!');
    }

    //IMPORT S 2
    public function import_b1(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Kamus Ensiklopedia', $namaFile);

        Excel::import(new KamusImport, public_path('/Kamus Ensiklopedia/' . $namaFile));
        File::delete(public_path('/Kamus Ensiklopedia/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/kamus_ensiklopedia')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_b2(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Jurnal Majalah', $namaFile);

        Excel::import(new JurnalImport, public_path('/Jurnal Majalah/' . $namaFile));
        File::delete(public_path('/Jurnal Majalah/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/jurnal_majalah')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_b3(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Terbitan Umum', $namaFile);

        Excel::import(new Terbitan_UmumImport, public_path('/Terbitan Umum/' . $namaFile));
        File::delete(public_path('/Terbitan Umum/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/terbitan_umum')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_b4(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Penyuluhan', $namaFile);

        Excel::import(new PenyuluhanImport, public_path('/Penyuluhan/' . $namaFile));
        File::delete(public_path('/Penyuluhan/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/penyuluhan')->with('toast_success', 'Import Data Berhasil!');
    }
    // public function import_b5(Request $request)
    // {
    //     // $file = $request->file('file');
    //     // $namaFile = $file->getClientOriginalName();
    //     // $file->move('Pesuluh', $namaFile);

    //     // Excel::import(new PesuluhImport, public_path('/Pesuluh/' . $namaFile));
    //     // File::delete(public_path('/Pesuluh/' . $namaFile));

    //     $data = Excel::toCollection(new PesuluhImport(), $request->file('file'));

    //     foreach ($data[0] as $key => $a) {
    //         if ($key == 1) {
    //             $id = $a[0];
    //         }
    //     }

    //     foreach ($data[0] as $key => $a) {
    //         if ($key >= 1) {
    //             dd($a[3]);
    //             $data = new Pesuluh();
    //             $data->nama = $a[1];
    //             $data->tempat_lahir = $a[2];
    //             $data->tanggal_lahir = $a[3];
    //             $data->instansi = $a[4];
    //             $data->tingkat = $a[5];
    //             $data->id_penyuluhan = $id;
    //             $data->save();
    //         }
    //     }

    //     return redirect('/operator/edit/kebahasaan/pesuluh')->with('toast_success', 'Import Data Berhasil!');
    // }
    public function import_b5(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Pesuluh', $namaFile);

        Excel::import(new PesuluhImport, public_path('/Pesuluh/' . $namaFile));
        File::delete(public_path('/Pesuluh/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/pesuluh')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_b6(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Penghargaan Bahasa', $namaFile);

        Excel::import(new Penghargaan_BahasaImport, public_path('/Penghargaan Bahasa/' . $namaFile));
        File::delete(public_path('/Penghargaan Bahasa/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/penghargaan_bahasa')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_b7(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Duta Bahasa Nasional', $namaFile);

        Excel::import(new Duta_NasionalImport, public_path('/Duta Bahasa Nasional/' . $namaFile));
        File::delete(public_path('/Duta Bahasa Nasional/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/duta_bahasa_nasional')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_b8(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Duta Bahasa Provinsi', $namaFile);

        Excel::import(new Duta_ProvinsiImport, public_path('/Duta Bahasa Provinsi/' . $namaFile));
        File::delete(public_path('/Duta Bahasa Provinsi/' . $namaFile));

        return redirect('/operator/edit/kebahasaan/duta_bahasa_provinsi')->with('toast_success', 'Import Data Berhasil!');
    }

    //IMPORT S 3
    public function import_c1(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Bengkel Sastra dan Bahasa', $namaFile);

        Excel::import(new Bengkel_Sastra_Dan_BahasaImport, public_path('/Bengkel Sastra dan Bahasa/' . $namaFile));
        File::delete(public_path('/Bengkel Sastra dan Bahasa/' . $namaFile));

        return redirect('/operator/edit/kesastraan/bengkel_sastra_dan_bahasa')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_c2(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Penghargaan Sastra', $namaFile);

        Excel::import(new Penghargaan_SastraImport, public_path('/Penghargaan Sastra/' . $namaFile));
        File::delete(public_path('/Penghargaan Sastra/' . $namaFile));

        return redirect('/operator/edit/kesastraan/penghargaan_sastra')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_c3(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Musikalisasi Puisi Nasional', $namaFile);

        Excel::import(new Musikalisasi_Puisi_NasionalImport, public_path('/Musikalisasi Puisi Nasional/' . $namaFile));
        File::delete(public_path('/Musikalisasi Puisi Nasional/' . $namaFile));

        return redirect('/operator/edit/kesastraan/musikalisasi_puisi_nasional')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_c4(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Musikalisasi Puisi Provinsi', $namaFile);

        Excel::import(new Musikalisasi_Puisi_ProvinsiImport, public_path('/Musikalisasi Puisi Provinsi/' . $namaFile));
        File::delete(public_path('/Musikalisasi Puisi Provinsi/' . $namaFile));

        return redirect('/operator/edit/kesastraan/musikalisasi_puisi_provinsi')->with('toast_success', 'Import Data Berhasil!');
    }

    //IMPORT S 4
    public function import_d1(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Komunitas Bahasa', $namaFile);

        Excel::import(new Komunitas_BahasaImport, public_path('/Komunitas Bahasa/' . $namaFile));
        File::delete(public_path('/Komunitas Bahasa/' . $namaFile));

        return redirect('/operator/edit/komunitas/komunitas_bahasa')->with('toast_success', 'Import Data Berhasil!');
    }
    public function import_d2(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Komunitas Sastra', $namaFile);

        Excel::import(new Komunitas_SastraImport, public_path('/Komunitas Sastra/' . $namaFile));
        File::delete(public_path('/Komunitas Sastra/' . $namaFile));

        return redirect('/operator/edit/komunitas/komunitas_sastra')->with('toast_success', 'Import Data Berhasil!');
    }

    //IMPORT S 5
    public function import_e1(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Penelitian', $namaFile);

        Excel::import(new PenelitianImport, public_path('/Penelitian/' . $namaFile));
        File::delete(public_path('/Penelitian/' . $namaFile));

        return redirect('/operator/edit/penelitian/penelitian')->with('toast_success', 'Import Data Berhasil!');
    }
}
