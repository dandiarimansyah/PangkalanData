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

class EditController extends Controller
{
    //EDIT KATEGORI A
    public function a1()
    {
        $anggaran = Anggaran::all();

        return view('EDIT.SEKRETARIAT.a1', compact('anggaran'));
    }
    public function a2()
    {
        $realisasi_anggaran = Realisasi_Anggaran::all();

        return view('EDIT.SEKRETARIAT.a2', compact('realisasi_anggaran'));
    }
    public function a3()
    {
        $kepegawaian = Kepegawaian::all();

        return view('EDIT.SEKRETARIAT.a3', compact('kepegawaian'));
    }
    public function a4()
    {
        $kerja_sama = Kerja_Sama::all();

        return view('EDIT.SEKRETARIAT.a4', compact('kerja_sama'));
    }
    public function a5()
    {
        $tanah_bangunan = Tanah_Bangunan::all();

        return view('EDIT.SEKRETARIAT.a5', compact('tanah_bangunan'));
    }

    public function a6()
    {
        $perpustakaan = Perpustakaan::all();

        return view('EDIT.SEKRETARIAT.a6', compact('perpustakaan'));
    }
    public function a7()
    {
        $inventarisasi = Inventarisasi::all();

        return view('EDIT.SEKRETARIAT.a7', compact('inventarisasi'));
    }

    //EDIT KATEGORI B
    public function b1()
    {
        $kamus = Kamus::all();

        return view('EDIT.KEBAHASAAN.b1', compact('kamus'));
    }
    public function b2()
    {
        $jurnal = Jurnal::all();

        return view('EDIT.KEBAHASAAN.b2', compact('jurnal'));
    }
    public function b3()
    {
        $terbitan_umum = Terbitan_Umum::all();

        return view('EDIT.KEBAHASAAN.b3', compact('terbitan_umum'));
    }
    public function b4()
    {
        $penyuluhan = Penyuluhan::all();

        return view('EDIT.KEBAHASAAN.b4', compact('penyuluhan'));
    }
    public function b5()
    {
        $pesuluh = Pesuluh::all();
        $penyuluhan = Penyuluhan::all();

        return view('EDIT.KEBAHASAAN.b5', compact('pesuluh', 'penyuluhan'));
    }
    public function b6()
    {
        $penghargaan_bahasa = Penghargaan_Bahasa::all();

        return view('EDIT.KEBAHASAAN.b6', compact('penghargaan_bahasa'));
    }
    public function b7()
    {
        $duta_nasional = Duta_Nasional::all();

        return view('EDIT.KEBAHASAAN.b7', compact('duta_nasional'));
    }
    public function b8()
    {
        $duta_provinsi = Duta_Provinsi::all();

        return view('EDIT.KEBAHASAAN.b8', compact('duta_provinsi'));
    }

    //EDIT KATEGORI C
    public function c1()
    {
        $bengkel_sastra_dan_bahasa = Bengkel_Sastra_Dan_Bahasa::all();

        return view('EDIT.KESASTRAAN.c1', compact('bengkel_sastra_dan_bahasa'));
    }
    public function c2()
    {
        $penghargaan_sastra = Penghargaan_Sastra::all();

        return view('EDIT.KESASTRAAN.c2', compact('penghargaan_sastra'));
    }
    public function c3()
    {
        $musikalisasi_puisi_nasional = Musikalisasi_Puisi_Nasional::all();

        return view('EDIT.KESASTRAAN.c3', compact('musikalisasi_puisi_nasional'));
    }
    public function c4()
    {
        $musikalisasi_puisi_provinsi = Musikalisasi_Puisi_Provinsi::all();

        return view('EDIT.KESASTRAAN.c4', compact('musikalisasi_puisi_provinsi'));
    }

    //EDIT KATEGORI D
    public function d1()
    {
        $komunitas_bahasa = Komunitas_Bahasa::all();

        return view('EDIT.KOMUNITAS.d1', compact('komunitas_bahasa'));
    }
    public function d2()
    {
        $komunitas_sastra = Komunitas_Sastra::all();

        return view('EDIT.KOMUNITAS.d2', compact('komunitas_sastra'));
    }

    //EDIT KATEGORI E
    public function e1()
    {
        $penelitian = Penelitian::all();

        return view('EDIT.PENELITIAN.e1', compact('penelitian'));
    }


    //UPDATE KATEGORI A

    public function update_a1($id, Request $request)
    {
        $request->validate([
            'tahun_anggaran' => ['required'],
            'nilai_anggaran' => ['nullable', 'numeric']
        ]);

        $data = Anggaran::where('id', $id)
            ->update([
                'tahun_anggaran' => $request->get('tahun_anggaran'),
                'nilai_anggaran' => $request->get('nilai_anggaran'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_a2($id, Request $request)
    {
        $request->validate([
            'tahun_realisasi' => ['numeric'],
            'besar_dana' => ['numeric'],
        ]);

        $data = Realisasi_Anggaran::where('id', $id)
            ->update([
                'tahun_realisasi' => $request->get('tahun_realisasi'),
                'besar_dana' => $request->get('besar_dana'),
                'keterangan' => $request->get('keterangan'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_a3($id, Request $request)
    {
        $request->validate([
            'laki' => ['nullable', 'numeric'],
            'perempuan' => ['nullable', 'numeric'],
            'semua_kelamin' => ['nullable', 'numeric'],
            'S3' => ['nullable', 'numeric'],
            'S2' => ['nullable', 'numeric'],
            'S1' => ['nullable', 'numeric'],
            'D3' => ['nullable', 'numeric'],
            'SMA' => ['nullable', 'numeric'],
            'SMP' => ['nullable', 'numeric'],
            'SD' => ['nullable', 'numeric'],
            'T_4E' => ['nullable', 'numeric'],
            'T_4D' => ['nullable', 'numeric'],
            'T_4C' => ['nullable', 'numeric'],
            'T_4B' => ['nullable', 'numeric'],
            'T_4A' => ['nullable', 'numeric'],
            'T_3D' => ['nullable', 'numeric'],
            'T_3C' => ['nullable', 'numeric'],
            'T_3B' => ['nullable', 'numeric'],
            'T_3A' => ['nullable', 'numeric'],
            'T_2D' => ['nullable', 'numeric'],
            'T_2C' => ['nullable', 'numeric'],
            'T_2B' => ['nullable', 'numeric'],
            'T_2A' => ['nullable', 'numeric'],
            'T_1D' => ['nullable', 'numeric'],
            'T_1C' => ['nullable', 'numeric'],
            'T_1B' => ['nullable', 'numeric'],
            'T_1A' => ['nullable', 'numeric'],
        ]);

        // $tanggal = new Carbon();

        $data = Kepegawaian::where('id', $id)
            ->update([
                // 'tanggal_diperbarui' => $tanggal,
                'semua_kelamin' => $request->get('semua_kelamin'),
                'laki' => $request->get('laki'),
                'perempuan' => $request->get('perempuan'),
                'S3' => $request->get('S3'),
                'S2' => $request->get('S2'),
                'S1' => $request->get('S1'),
                'D3' => $request->get('D3'),
                'SMA' => $request->get('SMA'),
                'SMP' => $request->get('SMP'),
                'SD' => $request->get('SD'),
                'T_4E' => $request->get('T_4E'),
                'T_4D' => $request->get('T_4D'),
                'T_4C' => $request->get('T_4C'),
                'T_4B' => $request->get('T_4B'),
                'T_4A' => $request->get('T_4A'),
                'T_3D' => $request->get('T_3D'),
                'T_3C' => $request->get('T_3C'),
                'T_3B' => $request->get('T_3B'),
                'T_3A' => $request->get('T_3A'),
                'T_2D' => $request->get('T_2D'),
                'T_2C' => $request->get('T_2C'),
                'T_2B' => $request->get('T_2B'),
                'T_2A' => $request->get('T_2A'),
                'T_1D' => $request->get('T_1D'),
                'T_1C' => $request->get('T_1C'),
                'T_1B' => $request->get('T_1B'),
                'T_1A' => $request->get('T_1A'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_a4($id, Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'instansi' => ['required'],
            'tanggal_awal' => ['required'],
        ]);

        $data = Kerja_Sama::where('id', $id)
            ->update([
                'kategori' => $request->get('kategori'),
                'instansi' => $request->get('instansi'),
                'tanggal_awal' => $request->get('tanggal_awal'),
                'tanggal_akhir' => $request->get('tanggal_akhir'),
                'nomor' => $request->get('nomor'),
                'perihal' => $request->get('perihal'),
                'keterangan' => $request->get('keterangan'),
                'ttd_1' => $request->get('ttd_1'),
                'instansi_1' => $request->get('instansi_1'),
                'ttd_2' => $request->get('ttd_2'),
                'instansi_2' => $request->get('instansi_2'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_a5($id, Request $request)
    {
        $request->validate([]);

        $data = Tanah_Bangunan::where('id', $id)
            ->update([
                'alamat' => $request->get('alamat'),
                'status_tanah' => $request->get('status_tanah'),
                'sertif_tanah' => $request->get('sertif_tanah'),
                'status_bangunan' => $request->get('status_bangunan'),
                'imb' => $request->get('imb'),
                'kondisi' => $request->get('kondisi'),
                'status_peroleh' => $request->get('status_peroleh'),
                'keterangan' => $request->get('keterangan'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_a6($id, Request $request)
    {
        $request->validate([
            'jenis_buku' => ['required'],
            'jumlah_buku' => ['nullable', 'numeric'],
            'jumlah_judul' => ['nullable', 'numeric'],
            'jumlah_pengunjung' => ['nullable', 'numeric'],
        ]);

        $data = Perpustakaan::where('id', $id)
            ->update([
                'jumlah_buku' => $request->get('jumlah_buku'),
                'jumlah_judul' => $request->get('jumlah_judul'),
                'jenis_buku' => $request->get('jenis_buku'),
                'jumlah_pengunjung' => $request->get('jumlah_pengunjung'),
                'sumber_data' => $request->get('sumber_data'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_a7($id, Request $request)
    {
        $request->validate([
            'tahun_anggaran' => ['required'],
            'laptop' => ['nullable', 'numeric'],
            'komputer' => ['nullable', 'numeric'],
            'printer' => ['nullable', 'numeric'],
            'fotocopy' => ['nullable', 'numeric'],
            'faximili' => ['nullable', 'numeric'],
            'LCD' => ['nullable', 'numeric'],
            'TV' => ['nullable', 'numeric'],
            'lain' => ['nullable', 'numeric'],
            'furniture' => ['nullable', 'numeric'],
            'roda_dua' => ['nullable', 'numeric'],
            'roda_empat' => ['nullable', 'numeric'],
            'roda_enam' => ['nullable', 'numeric'],
        ]);

        $data = Inventarisasi::where('id', $id)
            ->update([
                'tahun_anggaran' => $request->get('tahun_anggaran'),
                'laptop' => $request->get('laptop'),
                'komputer' => $request->get('komputer'),
                'printer' => $request->get('printer'),
                'fotocopy' => $request->get('fotocopy'),
                'faximili' => $request->get('faximili'),
                'LCD' => $request->get('LCD'),
                'TV' => $request->get('TV'),
                'lain' => $request->get('lain'),
                'furniture' => $request->get('furniture'),
                'roda_dua' => $request->get('roda_dua'),
                'roda_empat' => $request->get('roda_empat'),
                'roda_enam' => $request->get('roda_enam'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    //UPDATE KATEGORI B
    public function update_b1($id, Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'judul' => ['required'],
            'tim_redaksi' => ['required'],
            'lingkup' => ['required'],
            'tahun_terbit' => ['nullable', 'numeric'],
        ]);

        $data = Kamus::where('id', $id)
            ->update([
                'kategori' => $request->get('kategori'),
                'judul' => $request->get('judul'),
                'tim_redaksi' => $request->get('tim_redaksi'),
                'edisi' => $request->get('edisi'),
                'no_isbn' => $request->get('no_isbn'),
                'lingkup' => $request->get('lingkup'),
                'penerbit' => $request->get('penerbit'),
                'tahun_terbit' => $request->get('tahun_terbit'),
                'keterangan' => $request->get('keterangan'),
                'info_produk' => $request->get('info_produk'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_b2($id, Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'judul' => ['required'],
            'tim_redaksi' => ['required'],
            'lingkup' => ['required'],
            'tahun_terbit' => ['nullable', 'numeric'],
        ]);

        $data = Jurnal::where('id', $id)
            ->update([
                'kategori' => $request->get('kategori'),
                'judul' => $request->get('judul'),
                'tim_redaksi' => $request->get('tim_redaksi'),
                'volume' => $request->get('volume'),
                'no_issn' => $request->get('no_issn'),
                'lingkup' => $request->get('lingkup'),
                'penerbit' => $request->get('penerbit'),
                'keterangan' => $request->get('keterangan'),
                'info_produk' => $request->get('info_produk'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_b3($id, Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'judul' => ['required'],
            'tahun_terbit' => ['nullable', 'numeric'],
        ]);

        $data = Terbitan_Umum::where('id', $id)
            ->update([
                'kategori' => $request->get('kategori'),
                'judul' => $request->get('judul'),
                'penulis' => $request->get('penulis'),
                'no_isbn' => $request->get('no_isbn'),
                'tahun_terbit' => $request->get('tahun_terbit'),
                'deskripsi' => $request->get('deskripsi'),
                'info_produk' => $request->get('info_produk'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_b4($id, Request $request)
    {
        $request->validate([
            'kota' => ['required'],
            'jumlah_peserta' => ['nullable', 'numeric'],
        ]);

        $data = Penyuluhan::where('id', $id)
            ->update([
                'kota' => $request->get('kota'),
                'nama_kegiatan' => $request->get('nama_kegiatan'),
                'tanggal_awal' => $request->get('tanggal_awal'),
                'tanggal_akhir' => $request->get('tanggal_akhir'),
                'narasumber' => $request->get('narasumber'),
                'sasaran' => $request->get('sasaran'),
                'jumlah_peserta' => $request->get('jumlah_peserta'),
                'materi' => $request->get('materi'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_b5($id, Request $request)
    {
        $penyuluhan = Penyuluhan::find($id);

        $request->validate([
            'nama' => ['required'],
        ]);

        $data = Pesuluh::where('id', $id)
            ->update([
                'nama' => $request->get('nama'),
                'tempat_lahir' => $request->get('tempat_lahir'),
                'tanggal_lahir' => $request->get('tanggal_lahir'),
                'instansi' => $request->get('instansi'),
                'tingkat' => $request->get('tingkat'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_b6($id, Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'tahun' => ['nullable', 'numeric'],
        ]);

        $data = Penghargaan_Bahasa::where('id', $id)
            ->update([
                'kategori' => $request->get('kategori'),
                'tahun' => $request->get('tahun'),
                'deskripsi' => $request->get('deskripsi'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_b7($id, Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $data = Duta_Nasional::where('id', $id)
            ->update([
                'tahun' => $request->get('tahun'),
                'pemenang_1_1' => $request->get('pemenang_1_1'),
                'pemenang_1_2' => $request->get('pemenang_1_2'),
                'pemenang_2_1' => $request->get('pemenang_2_1'),
                'pemenang_2_2' => $request->get('pemenang_2_2'),
                'pemenang_3_1' => $request->get('pemenang_3_1'),
                'pemenang_3_2' => $request->get('pemenang_3_2'),
                'keterangan' => $request->get('keterangan'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_b8($id, Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $data = Duta_Provinsi::where('id', $id)
            ->update([
                'tahun' => $request->get('tahun'),
                'pemenang_1_1' => $request->get('pemenang_1_1'),
                'pemenang_1_2' => $request->get('pemenang_1_2'),
                'pemenang_2_1' => $request->get('pemenang_2_1'),
                'pemenang_2_2' => $request->get('pemenang_2_2'),
                'pemenang_3_1' => $request->get('pemenang_3_1'),
                'pemenang_3_2' => $request->get('pemenang_3_2'),
                'favorit_1' => $request->get('favorit_1'),
                'favorit_2' => $request->get('favorit_2'),
                'keterangan' => $request->get('keterangan'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    //UPDATE KATEGORI C
    public function update_c1($id, Request $request)
    {
        $request->validate([
            'kota' => ['required'],
            'jumlah_peserta' => ['nullable', 'numeric'],
            'jumlah_sekolah' => ['nullable', 'numeric'],
            'jumlah_sekolah_yang_dibina' => ['nullable', 'numeric'],
        ]);

        $data = Bengkel_Sastra_Dan_Bahasa::where('id', $id)
            ->update([
                'kota' => $request->get('kota'),
                'nama_kegiatan' => $request->get('nama_kegiatan'),
                'tanggal_awal_pelaksanaan' => $request->get('tanggal_awal_pelaksanaan'),
                'tanggal_akhir_pelaksanaan' => $request->get('tanggal_akhir_pelaksanaan'),
                'pemateri' => $request->get('pemateri'),
                'jumlah_peserta' => $request->get('jumlah_peserta'),
                'jumlah_sekolah' => $request->get('jumlah_sekolah'),
                'jumlah_sekolah_yang_dibina' => $request->get('jumlah_sekolah_yang_dibina'),
                'jumlah_sekolah_yang_dibina' => $request->get('jumlah_sekolah_yang_dibina'),
                'nama_sekolah_yang_dibina' => $request->get('nama_sekolah_yang_dibina'),
                'aktivitas' => $request->get('aktivitas'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_c2($id, Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'tahun' => ['nullable', 'numeric'],
        ]);

        $data = Penghargaan_Sastra::where('id', $id)
            ->update([
                'kategori' => $request->get('kategori'),
                'tahun' => $request->get('tahun'),
                'deskripsi' => $request->get('deskripsi'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_c3($id, Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $data = Musikalisasi_Puisi_Nasional::where('id', $id)
            ->update([
                'tahun' => $request->get('tahun'),
                'pemenang_1' => $request->get('pemenang_1'),
                'pemenang_2' => $request->get('pemenang_2'),
                'pemenang_3' => $request->get('pemenang_3'),
                'favorit' => $request->get('favorit'),
                'keterangan' => $request->get('keterangan'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    ////////////////////////////////////////////
    public function update_c4($id, Request $request)
    {
        $request->validate([
            'tahun' => ['nullable', 'numeric'],
        ]);

        $data = Musikalisasi_Puisi_Provinsi::where('id', $id)
            ->update([
                'tahun' => $request->get('tahun'),
                'pemenang_1' => $request->get('pemenang_1'),
                'pemenang_2' => $request->get('pemenang_2'),
                'pemenang_3' => $request->get('pemenang_3'),
                'favorit' => $request->get('favorit'),
                'keterangan' => $request->get('keterangan'),
                // 'media' => $request->get('media'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    //UPDATE KATEGORI D
    public function update_d1($id, Request $request)
    {
        $request->validate([
            'nama_komunitas' => ['required'],
            'kota' => ['required'],
        ]);

        $data = Komunitas_Bahasa::where('id', $id)
            ->update([
                'nama_komunitas' => $request->get('nama_komunitas'),
                'kota' => $request->get('kota'),
                'kecamatan' => $request->get('kecamatan'),
                'alamat' => $request->get('alamat'),
                'koordinat' => $request->get('koordinat'),
                'keterangan' => $request->get('keterangan'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    //////////////////////////////////////////////////
    public function update_d2($id, Request $request)
    {
        $request->validate([
            'nama_komunitas' => ['required'],
            'kota' => ['required'],
        ]);

        $data = Komunitas_Sastra::where('id', $id)
            ->update([
                'nama_komunitas' => $request->get('nama_komunitas'),
                'kota' => $request->get('kota'),
                'kecamatan' => $request->get('kecamatan'),
                'alamat' => $request->get('alamat'),
                'koordinat' => $request->get('koordinat'),
                'keterangan' => $request->get('keterangan'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }

    //UPDATE KATEGORI E
    public function update_e1($id, Request $request)
    {
        $request->validate([
            'kategori' => ['required'],
            'peneliti' => ['required'],
            'judul' => ['required'],
            'abstrak' => ['required'],
            'lama_penelitian' => ['nullable', 'numeric'],
            'tahun_terbit' => ['nullable', 'numeric'],
        ]);

        $data = Penelitian::where('id', $id)
            ->update([
                'peneliti' => $request->get('peneliti'),
                'judul' => $request->get('judul'),
                'kerja_sama' => $request->get('kerja_sama'),
                'tanggal_awal' => $request->get('tanggal_awal'),
                'tanggal_akhir' => $request->get('tanggal_akhir'),
                'lama_penelitian' => $request->get('lama_penelitian'),
                'tipe_waktu' => $request->get('tipe_waktu'),
                'publikasi' => $request->get('publikasi'),
                'tahun_terbit' => $request->get('tahun_terbit'),
                'abstrak' => $request->get('abstrak'),
            ]);

        return back()->with('toast_success', 'Data Berhasil Diedit!');
    }
}
