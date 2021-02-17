<?php

namespace App\Imports;

use App\Pesuluh;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PesuluhImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pesuluh([
            'nama'  => $row['nama'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'instansi' => $row['instansi'],
            'tingkat' => $row['tingkat'],
            'id_penyuluhan' => $row['id_penyuluhan'],
        ]);
    }
}
