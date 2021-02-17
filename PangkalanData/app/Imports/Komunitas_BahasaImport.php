<?php

namespace App\Imports;

use App\Komunitas_Bahasa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Komunitas_BahasaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Komunitas_Bahasa([
            'nama_komunitas'  => $row['nama_komunitas'],
            'provinsi' => $row['provinsi'],
            'kota' => $row['kota'],
            'kecamatan' => $row['kecamatan'],
            'alamat' => $row['alamat'],
            'koordinat' => $row['kecamatan'],
            'keterangan' => $row['keterangan'],
        ]);
    }
}
