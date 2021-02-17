<?php

namespace App\Imports;

use App\Kamus;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KamusImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kamus([
            'kategori'  => $row['kategori'],
            'judul' => $row['judul'],
            'tim_redaksi' => $row['tim_redaksi'],
            'edisi' => $row['edisi'],
            'no_isbn' => $row['no_isbn'],
            'lingkup' => $row['lingkup'],
            'penerbit' => $row['penerbit'],
            'tahun_terbit' => $row['tahun_terbit'],
            'keterangan' => $row['keterangan'],
            'info_produk' => $row['info_produk'],
            'media' => $row['media'],
        ]);
    }
}
