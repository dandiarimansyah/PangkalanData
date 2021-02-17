<?php

namespace App\Imports;

use App\Penyuluhan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PenyuluhanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penyuluhan([
            'provinsi'  => $row['provinsi'],
            'kota' => $row['kota'],
            'nama_kegiatan' => $row['nama_kegiatan'],
            'tanggal_awal' => $row['tanggal_awal'],
            'tanggal_akhir' => $row['tanggal_akhir'],
            'narasumber' => $row['narasumber'],
            'sasaran' => $row['sasaran'],
            'jumlah_peserta' => $row['jumlah_peserta'],
            'materi' => $row['materi'],
            'media' => $row['media'],
        ]);
    }
}
