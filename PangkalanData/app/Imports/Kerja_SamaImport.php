<?php

namespace App\Imports;

use App\Kerja_Sama;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Kerja_SamaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kerja_Sama([
            'kategori'  => $row['kategori'],
            'instansi' => $row['instansi'],
            'tanggal_awal' => $row['tanggal_awal'],
            'tanggal_akhir' => $row['tanggal_akhir'],
            'nomor' => $row['nomor'],
            'perihal' => $row['perihal'],
            'keterangan' => $row['keterangan'],
            'ttd_1' => $row['ttd_1'],
            'instansi_1' => $row['instansi_1'],
            'ttd_2' => $row['ttd_2'],
            'instansi_2' => $row['instansi_2'],
            'media' => $row['media'],
        ]);
    }
}
