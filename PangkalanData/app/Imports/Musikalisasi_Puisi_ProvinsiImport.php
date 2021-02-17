<?php

namespace App\Imports;

use App\Musikalisasi_Puisi_Provinsi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Musikalisasi_Puisi_ProvinsiImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Musikalisasi_Puisi_Provinsi([
            'provinsi'  => $row['provinsi'],
            'tahun' => $row['tahun'],
            'pemenang_1' => $row['pemenang_1'],
            'pemenang_2' => $row['pemenang_2'],
            'pemenang_3' => $row['pemenang_3'],
            'favorit' => $row['favorit'],
            'keterangan' => $row['keterangan'],
            'media' => $row['media'],
        ]);
    }
}
