<?php

namespace App\Imports;

use App\Models\Anggaran;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
// use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithMappedCells;

class AnggaranImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 3) {
                // $tanggal = ($row[6] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tanggal);
                // dd($tanggal2);

                Anggaran::create([
                    'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
                    'tahun_anggaran' => $row[1],
                    'nilai_anggaran' => $row[2],
                ]);
            }
        }
    }
}
