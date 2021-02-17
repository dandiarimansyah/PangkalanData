<?php

namespace App\Imports;

use App\Realisasi_Anggaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Realisasi_AnggaranImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Realisasi_Anggaran([
            'unit'  => $row['unit'],
            'nilai_realisasi' => $row['nilai_realisasi'],
            'besar_dana' => $row['besar_dana'],
            'keterangan' => $row['keterangan'],
        ]);
    }
}
