<?php

namespace App\Imports;

use App\Perpustakaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PerpustakaanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Perpustakaan([
            'provinsi'  => $row['provinsi'],
            'unit' => $row['unit'],
            'jumlah_buku' => $row['jumlah_buku'],
            'jumlah_judul' => $row['jumlah_judul'],
            'jenis_buku' => $row['jenis_buku'],
            'jumlah_pengunjung' => $row['jumlah_pengunjung'],
            'sumber_data' => $row['sumber_data'],
        ]);
    }
}
