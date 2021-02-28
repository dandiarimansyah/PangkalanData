<?php

namespace App\Imports;

use App\Models\Inventarisasi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class InventarisasiImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {

                Inventarisasi::create([
                    // 'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
                    'tahun_anggaran' => $row[3],
                    'laptop' => $row[4],
                    'komputer' => $row[5],
                    'printer' => $row[6],
                    'fotocopy' => $row[7],
                    'faximili' => $row[8],
                    'LCD' => $row[9],
                    'TV' => $row[10],
                    'lain' => $row[11],
                    'furniture' => $row[12],
                    'roda_dua' => $row[13],
                    'roda_empat' => $row[14],
                    'roda_enam' => $row[15],
                ]);
            }
        }
    }
}
