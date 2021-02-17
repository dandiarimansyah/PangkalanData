<?php

namespace App\Imports;

use App\Jurnal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JurnalImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jurnal([
            'kategori'  => $row['kategori'],
            'judul' => $row['judul'],
            'tim_redaksi' => $row['tim_redaksi'],
            'volume' => $row['volume'],
            'no_issn' => $row['no_issn'],
            'lingkup' => $row['lingkup'],
            'penerbit' => $row['penerbit'],
            'keterangan' => $row['keterangan'],
            'info_produk' => $row['info_produk'],
            'media' => $row['media'],
        ]);
    }
}
