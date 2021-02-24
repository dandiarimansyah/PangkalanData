<?php

namespace App\Imports;

use App\Inventarisasi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InventarisasiImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Inventarisasi([
            'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
            'tahun_anggaran' => $row['tahun_anggaran'],
            'laptop' => $row['laptop'],
            'komputer' => $row['komputer'],
            'printer' => $row['printer'],
            'fotocopy' => $row['fotocopy'],
            'faximili' => $row['faximili'],
            'LCD' => $row['LCD'],
            'TV' => $row['TV'],
            'lain' => $row['lain'],
            'furniture' => $row['furniture'],
            'roda_dua' => $row['roda_dua'],
            'roda_empat' => $row['roda_empat'],
            'roda_enam' => $row['roda_enam'],
        ]);
    }
}
