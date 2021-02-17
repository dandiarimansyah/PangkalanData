<?php

namespace App\Imports;

use App\Penghargaan_Bahasa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Penghargaan_BahasaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penghargaan_Bahasa([
            'kategori'  => $row['kategori'],
            'tahun' => $row['tahun'],
            'deskripsi' => $row['deskripsi'],
            'media' => $row['media'],
        ]);
    }
}
