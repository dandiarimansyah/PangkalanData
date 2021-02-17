<?php

namespace App\Imports;

use App\Bengkel_Sastra_Dan_Bahasa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Bengkel_Sastra_Dan_BahasaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bengkel_Sastra_Dan_Bahasa([
            'provinsi'  => $row['provinsi'],
            'kota' => $row['kota'],
            'nama_kegiatan' => $row['nama_kegiatan'],
            'tanggal_awal_pelaksanaan' => $row['tanggal_awal_pelaksanaan'],
            'tanggal_akhir_pelaksanaan' => $row['tanggal_akhir_pelaksanaan'],
            'pemateri' => $row['pemateri'],
            'jumlah_peserta' => $row['jumlah_peserta'],
            'jumlah_sekolah' => $row['jumlah_sekolah'],
            'jumlah_sekolah_yang_dibina' => $row['jumlah_sekolah_yang_dibina'],
            'nama_sekolah_yang_dibina' => $row['nama_sekolah_yang_dibina'],
            'aktivitas' => $row['aktivitas'],
            'media' => $row['media'],
        ]);
    }
}
