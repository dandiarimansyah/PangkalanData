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

class InputController extends Controller
{

    //INPUT KATEGORI A
    public function a1()
    {
        return view('INPUT.SEKRETARIAT.a1');
    }
    public function a2()
    {
        return view('INPUT.SEKRETARIAT.a2');
    }
    public function a3()
    {
        return view('INPUT.SEKRETARIAT.a3');
    }
    public function a4()
    {
        return view('INPUT.SEKRETARIAT.a4');
    }
    public function a5()
    {
        return view('INPUT.SEKRETARIAT.a5');
    }
    public function a6()
    {
        return view('INPUT.SEKRETARIAT.a6');
    }
    public function a7()
    {
        return view('INPUT.SEKRETARIAT.a7');
    }

    //INPUT KATEGORI B
    public function b1()
    {
        return view('INPUT.KEBAHASAAN.b1');
    }
    public function b2()
    {
        return view('INPUT.KEBAHASAAN.b2');
    }
    public function b3()
    {
        return view('INPUT.KEBAHASAAN.b3');
    }
    public function b4()
    {
        return view('INPUT.KEBAHASAAN.b4');
    }
    public function b5()
    {
        return view('INPUT.KEBAHASAAN.b5');
    }
    public function b6()
    {
        return view('INPUT.KEBAHASAAN.b6');
    }
    public function b7()
    {
        return view('INPUT.KEBAHASAAN.b7');
    }
    public function b8()
    {
        return view('INPUT.KEBAHASAAN.b8');
    }

    //INPUT KATEGORI C
    public function c1()
    {
        return view('INPUT.KESASTRAAN.c1');
    }
    public function c2()
    {
        return view('INPUT.KESASTRAAN.c2');
    }
    public function c3()
    {
        return view('INPUT.KESASTRAAN.c3');
    }
    public function c4()
    {
        return view('INPUT.KESASTRAAN.c4');
    }

    //INPUT KATEGORI D
    public function d1()
    {
        return view('INPUT.KOMUNITAS.d1');
    }
    public function d2()
    {
        return view('INPUT.KOMUNITAS.d2');
    }

    //INPUT KATEGORI E
    public function e1()
    {
        return view('INPUT.PENELITIAN.e1');
    }

    public function store_a1(Request $request)
    {
        $request->validate([
            'unit' => ['required'],
            'tahun_anggaran' => ['required'],
            'nilai_anggaran' => ['numeric']
        ]);

        $data = new Anggaran();
        $data->unit = $request->unit;
        $data->tahun_anggaran = $request->tahun_anggaran;
        $data->nilai_anggaran = $request->nilai_anggaran;
        $data->save();

        return redirect('/operator/edit/sekretariat/anggaran')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a2(Request $request)
    {
        $request->validate([
            'unit' => ['required'],
            'besar_dana' => ['numeric'],
        ]);

        $data = new Realisasi_Anggaran();
        $data->unit = $request->unit;
        $data->nilai_realisasi = $request->nilai_realisasi;
        $data->besar_dana = $request->besar_dana;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/sekretariat/realisasi_anggaran')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a3(Request $request)
    {
        $request->validate([
            'tanggal_diperbarui' => ['required'],
            'unit' => ['required'],
        ]);

        $data = new Kepegawaian();
        $data->tanggal_diperbarui = $request->tanggal_diperbarui;
        $data->unit = $request->unit;
        $data->semua_kelamin = $request->semua_kelamin;
        $data->laki = $request->laki;
        $data->perempuan = $request->perempuan;
        $data->S3 = $request->S3;
        $data->S2 = $request->S2;
        $data->S1 = $request->S1;
        $data->D3 = $request->D3;
        $data->SMA = $request->SMA;
        $data->SMP = $request->SMP;
        $data->SD = $request->SD;
        $data->T_4E = $request->T_4E;
        $data->T_4D = $request->T_4D;
        $data->T_4C = $request->T_4C;
        $data->T_4B = $request->T_4B;
        $data->T_4A = $request->T_4A;
        $data->T_3D = $request->T_3D;
        $data->T_3C = $request->T_3C;
        $data->T_3B = $request->T_3B;
        $data->T_3A = $request->T_3A;
        $data->T_2D = $request->T_2D;
        $data->T_2C = $request->T_2C;
        $data->T_2B = $request->T_2B;
        $data->T_2A = $request->T_2A;
        $data->T_1D = $request->T_1D;
        $data->T_1C = $request->T_1C;
        $data->T_1B = $request->T_1B;
        $data->T_1A = $request->T_1A;
        $data->save();

        return redirect('/operator/edit/sekretariat/kepegawaian')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a4(Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'nama_instansi' => ['required'],
            'tanggal_kerja' => ['required']
        ]);

        $data = new Kerja_Sama();
        $data->kategori = $request->kategori;
        $data->instansi = $request->instansi;
        $data->tanggal_awal = $request->tanggal_awal;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->nomor = $request->nomor;
        $data->perihal = $request->perihal;
        $data->keterangan = $request->keterangan;
        $data->ttd_1 = $request->ttd_1;
        $data->instansi_1 = $request->instansi_1;
        $data->ttd_2 = $request->ttd_2;
        $data->instansi_2 = $request->instansi_2;
        $data->save();

        return redirect('/operator/edit/sekretariat/kerja_sama')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a5(Request $request)
    {
        $request->validate([
            'balai' => ['required']
        ]);

        $data = new Tanah_Bangunan();
        $data->kantor = $request->kantor;
        $data->alamat = $request->alamat;
        $data->status_tanah = $request->status_tanah;
        $data->sertif_tanah = $request->sertif_tanah;
        $data->status_bangunan = $request->status_bangunan;
        $data->imb = $request->imb;
        $data->kondisi = $request->kondisi;
        $data->status_peroleh = $request->status_peroleh;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/sekretariat/tanah_dan_bangunan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a6(Request $request)
    {
        $request->validate([
            'provinsi' => ['required'],
            'unit' => ['required']
        ]);

        $data = new Perpustakaan();
        $data->provinsi = $request->provinsi;
        $data->unit = $request->unit;
        $data->jumlah_buku = $request->jumlah_buku;
        $data->jumlah_judul = $request->jumlah_judul;
        $data->jenis_buku = $request->jenis_buku;
        $data->jumlah_pengunjung = $request->jumlah_pengunjung;
        $data->sumber_data = $request->sumber_data;
        $data->save();

        return redirect('/operator/edit/sekretariat/perpustakaan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_a7(Request $request)
    {
        $request->validate([
            'unit' => ['required'],
            'tahun_anggaran' => ['required']
        ]);

        $data = new Inventarisasi();
        $data->unit = $request->unit;
        $data->tahun_anggaran = $request->tahun_anggaran;
        $data->laptop = $request->laptop;
        $data->komputer = $request->komputer;
        $data->printer = $request->printer;
        $data->fotocopy = $request->fotocopy;
        $data->faximili = $request->faximili;
        $data->LCD = $request->LCD;
        $data->TV = $request->TV;
        $data->lain = $request->lain;
        $data->furniture = $request->furniture;
        $data->roda_dua = $request->roda_dua;
        $data->roda_empat = $request->roda_empat;
        $data->roda_enam = $request->roda_enam;
        $data->save();

        return redirect('/operator/edit/sekretariat/inventarisasi')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b1(Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'judul' => ['required'],
            'tim_redaksi' => ['required'],
            'lingkup' => ['required']
        ]);

        $data = new Kamus();
        $data->kategori = $request->kategori;
        $data->judul = $request->judul;
        $data->tim_redaksi = $request->tim_redaksi;
        $data->edisi = $request->edisi;
        $data->no_isbn = $request->no_isbn;
        $data->lingkup = $request->lingkup;
        $data->penerbit = $request->penerbit;
        $data->tahun_terbit = $request->tahun_terbit;
        $data->keterangan = $request->keterangan;
        $data->info_produk = $request->info_produk;
        $data->save();

        return redirect('/operator/edit/kebahasaan/kamus_ensiklopedia')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b2(Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'judul' => ['required'],
            'tim_redaksi' => ['required'],
            'lingkup' => ['required']
        ]);

        $data = new Jurnal();
        $data->kategori = $request->kategori;
        $data->judul = $request->judul;
        $data->tim_redaksi = $request->tim_redaksi;
        $data->volume = $request->volume;
        $data->no_issn = $request->no_issn;
        $data->lingkup = $request->lingkup;
        $data->penerbit = $request->penerbit;
        $data->tahun_terbit = $request->tahun_terbit;
        $data->keterangan = $request->keterangan;
        $data->info_produk = $request->info_produk;
        $data->save();

        return redirect('/operator/edit/kebahasaan/jurnal_majalah')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b3(Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'judul' => ['required']
        ]);

        $data = new Terbitan_Umum();
        $data->kategori = $request->kategori;
        $data->judul = $request->judul;
        $data->penulis = $request->penulis;
        $data->no_isbn = $request->no_isbn;
        $data->tahun_terbit = $request->tahun_terbit;
        $data->deskripsi = $request->deskripsi;
        $data->info_produk = $request->info_produk;
        $data->save();

        return redirect('/operator/edit/kebahasaan/terbitan_umum')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b4(Request $request)
    {
        $request->validate([
            'provinsi' => ['required'],
            'kota' => ['required']
        ]);

        $data = new Penyuluhan();
        $data->provinsi = $request->provinsi;
        $data->kota = $request->kota;
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->tanggal_awal = $request->tanggal_awal;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->narasumber = $request->narasumber;
        $data->sasaran = $request->sasaran;
        $data->jumlah_peserta = $request->jumlah_peserta;
        $data->materi = $request->materi;
        $data->save();

        return redirect('/operator/edit/kebahasaan/penyuluhan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b5(Request $request, $id)
    {

        $pesuluh = Pesuluh::find($id);

        $request->validate([
            'nama' => ['required'],
        ]);

        $data = new Pesuluh();
        $data->nama = $request->nama;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->instansi = $request->instansi;
        $data->tingkat = $request->tingkat;

        $data->id_penyuluhan = $pesuluh->id;
        $data->save();

        return redirect('/operator/edit/kebahasaan/pesuluh')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b6(Request $request)
    {
        $request->validate([
            'kategori' => ['required']
        ]);

        $data = new Penghargaan_Bahasa();
        $data->kategori = $request->kategori;
        $data->tahun = $request->tahun;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect('/operator/edit/kebahasaan/penghargaan_bahasa')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b7(Request $request)
    {
        $request->validate([
            'provinsi' => ['required']
        ]);

        $data = new Duta_Nasional();
        $data->provinsi = $request->provinsi;
        $data->tahun = $request->tahun;
        $data->pemenang_1_1 = $request->pemenang_1_1;
        $data->pemenang_1_2 = $request->pemenang_1_2;
        $data->pemenang_2_1 = $request->pemenang_2_1;
        $data->pemenang_2_2 = $request->pemenang_2_2;
        $data->pemenang_3_1 = $request->pemenang_3_1;
        $data->pemenang_3_2 = $request->pemenang_3_2;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/kebahasaan/duta_bahasa_nasional')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_b8(Request $request)
    {
        $request->validate([
            'provinsi' => ['required']
        ]);

        $data = new Duta_Provinsi();
        $data->provinsi = $request->provinsi;
        $data->tahun = $request->tahun;
        $data->pemenang_1_1 = $request->pemenang_1_1;
        $data->pemenang_1_2 = $request->pemenang_1_2;
        $data->pemenang_2_1 = $request->pemenang_2_1;
        $data->pemenang_2_2 = $request->pemenang_2_2;
        $data->pemenang_3_1 = $request->pemenang_3_1;
        $data->pemenang_3_2 = $request->pemenang_3_2;
        $data->favorit_1 = $request->favorit_1;
        $data->favorit_2 = $request->favorit_2;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/kebahasaan/duta_bahasa_provinsi')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_c1(Request $request)
    {
        $request->validate([
            'provinsi' => ['required'],
            'kota' => ['required']
        ]);

        $data = new Bengkel_Sastra_Dan_Bahasa();
        $data->provinsi = $request->provinsi;
        $data->kota = $request->kota;
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->tanggal_awal_pelaksanaan = $request->tanggal_awal_pelaksanaan;
        $data->tanggal_akhir_pelaksanaan = $request->tanggal_akhir_pelaksanaan;
        $data->pemateri = $request->pemateri;
        $data->jumlah_peserta = $request->jumlah_peserta;
        $data->jumlah_sekolah = $request->jumlah_sekolah;
        $data->jumlah_sekolah_yang_dibina = $request->jumlah_sekolah_yang_dibina;
        $data->nama_sekolah_yang_dibina = $request->nama_sekolah_yang_dibina;
        $data->aktivitas = $request->aktivitas;
        $data->save();

        return redirect('/operator/edit/kesastraan/bengkel_sastra_dan_bahasa')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_c2(Request $request)
    {
        $request->validate([
            'kategori' => ['required']
        ]);

        $data = new Penghargaan_Sastra();
        $data->kategori = $request->kategori;
        $data->tahun = $request->tahun;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect('/operator/edit/kesastraan/penghargaan_sastra')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_c3(Request $request)
    {
        // $request->validate([
        //     'tahun' => ['required']
        // ]);

        $data = new Musikalisasi_Puisi_Nasional();
        $data->tahun = $request->tahun;
        $data->pemenang_1 = $request->pemenang_1;
        $data->pemenang_2 = $request->pemenang_2;
        $data->pemenang_3 = $request->pemenang_3;
        $data->favorit = $request->favorit;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/kesastraan/musikalisasi_puisi_nasional')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_c4(Request $request)
    {
        $request->validate([
            'provinsi' => ['required']
        ]);

        $data = new Musikalisasi_Puisi_Provinsi();
        $data->provinsi = $request->provinsi;
        $data->tahun = $request->tahun;
        $data->pemenang_1 = $request->pemenang_1;
        $data->pemenang_2 = $request->pemenang_2;
        $data->pemenang_3 = $request->pemenang_3;
        $data->favorit = $request->favorit;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/kesastraan/musikalisasi_puisi_provinsi')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_d1(Request $request)
    {
        $request->validate([
            'nama_komunitas' => ['required'],
            'provinsi' => ['required'],
            'kota' => ['required'],
        ]);

        $data = new Komunitas_Bahasa();
        $data->nama_komunitas = $request->nama_komunitas;
        $data->provinsi = $request->provinsi;
        $data->kota = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->alamat = $request->alamat;
        $data->koordinat = $request->koordinat;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/komunitas/komunitas_bahasa')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_d2(Request $request)
    {
        $request->validate([
            'nama_komunitas' => ['required'],
            'provinsi' => ['required'],
            'kota' => ['required'],
        ]);

        $data = new Komunitas_Sastra();
        $data->nama_komunitas = $request->nama_komunitas;
        $data->provinsi = $request->provinsi;
        $data->kota = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->alamat = $request->alamat;
        $data->koordinat = $request->koordinat;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/operator/edit/komunitas/komunitas_sastra')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_e1(Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'unit' => ['required'],
            'peneliti' => ['required'],
            'judul' => ['required'],
            'abstrak' => ['required'],
        ]);

        $data = new Penelitian();
        $data->kategori = $request->kategori;
        $data->unit = $request->unit;
        $data->peneliti = $request->peneliti;
        $data->judul = $request->judul;
        $data->kerja_sama = $request->kerja_sama;
        $data->tanggal_awal = $request->tanggal_awal;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->lama_penelitian = $request->lama_penelitian;
        $data->publikasi = $request->publikasi;
        $data->tahun_terbit = $request->tahun_terbit;
        $data->abstrak = $request->abstrak;
        $data->file = $request->file;
        $data->save();

        return redirect('/operator/edit/penelitian/penelitian')->with('success', 'Data Berhasil Ditambahkan!');
    }
}
