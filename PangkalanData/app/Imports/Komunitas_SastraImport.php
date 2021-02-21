<?php

namespace App\Imports;

use App\Komunitas_Sastra;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Komunitas_SastraImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Komunitas_Sastra([
            'nama_komunitas'  => $row['nama_komunitas'],
            'provinsi' => $row['provinsi'],
            'kota' => $row['kota'],
            'kecamatan' => $row['kecamatan'],
            'alamat' => $row['alamat'],
            'koordinat' => $row['koordinat'],
            'keterangan' => $row['keterangan'],
        ]);
    }
}
