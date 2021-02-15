<?php

namespace App\Imports;

use App\Models\Anggaran;
use Maatwebsite\Excel\Concerns\ToModel;

class AnggaranImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Anggaran([
            'unit' => $row[1],
            'tahun_anggaran' => $row[2],
            'nilai_anggaran' => $row[3],
        ]);
    }
}
