<?php

namespace App\Imports;

use App\Duta_Nasional;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Duta_NasionalImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Duta_Nasional([
            'provinsi'  => $row['provinsi'],
            'tahun' => $row['tahun'],
            'pemenang_1_1' => $row['pemenang_1_1'],
            'pemenang_1_2' => $row['pemenang_1_2'],
            'pemenang_2_1' => $row['pemenang_2_1'],
            'pemenang_2_2' => $row['pemenang_2_2'],
            'pemenang_3_1' => $row['pemenang_3_1'],
            'pemenang_3_2' => $row['pemenang_3_2'],
            'keterangan' => $row['keterangan'],
            'media' => $row['media'],
        ]);
    }
}
