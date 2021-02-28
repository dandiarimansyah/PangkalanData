<?php

namespace App\Imports;

use App\Models\Realisasi_Anggaran;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Realisasi_AnggaranImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {

                Realisasi_Anggaran::create([
                    // 'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
                    'nilai_realisasi' => $row[3],
                    'besar_dana' => $row[4],
                    'keterangan' => $row[5],
                ]);
            }
        }
    }
}
