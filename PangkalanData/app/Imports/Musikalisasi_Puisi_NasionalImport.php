<?php

namespace App\Imports;

use App\Musikalisasi_Puisi_Nasional;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Musikalisasi_Puisi_NasionalImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Musikalisasi_Puisi_Nasional([
            'tahun'  => $row['tahun'],
            'pemenang_1' => $row['pemenang_1'],
            'pemenang_2' => $row['pemenang_2'],
            'pemenang_3' => $row['keterangan'],
            'favorit' => $row['favorit'],
            'keterangan' => $row['keterangan'],
            'media' => $row['media'],
        ]);
    }
}
