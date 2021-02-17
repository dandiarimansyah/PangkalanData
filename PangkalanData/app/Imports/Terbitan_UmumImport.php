<?php

namespace App\Imports;

use App\Terbitan_Umum;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Terbitan_UmumImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Terbitan_Umum([
            'kategori'  => $row['kategori'],
            'judul' => $row['judul'],
            'penulis' => $row['penulis'],
            'no_isbn' => $row['no_isbn'],
            'tahun_terbit' => $row['tahun_terbit'],
            'deskripsi' => $row['deskripsi'],
            'info_produk' => $row['info_produk'],
            'media' => $row['media'],
        ]);
    }
}
