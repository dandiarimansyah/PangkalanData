<?php

namespace App\Imports;

use App\Models\Anggaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnggaranImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // return new Anggaran([
        //     'unit' => $row[1],
        //     'tahun_anggaran' => $row[2],
        //     'nilai_anggaran' => $row[3],
        // ]);
        return new Anggaran([
            'unit'  => $row['unit'],
            'tahun_anggaran' => $row['tahun_anggaran'],
            'nilai_anggaran' => $row['nilai_anggaran'],
        ]);
    }
}
