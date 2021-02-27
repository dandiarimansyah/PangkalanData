<?php

namespace App\Imports;

use App\Models\Anggaran;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class AnggaranImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 1) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);
                // dd($tanggal2);

                Anggaran::create([
                    'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
                    'tahun_anggaran' => $row[3],
                    'nilai_anggaran' => $row[4],
                ]);
            }
        }
    }
}
