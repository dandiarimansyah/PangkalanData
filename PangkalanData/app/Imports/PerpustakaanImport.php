<?php

namespace App\Imports;

use App\Models\Perpustakaan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PerpustakaanImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 1) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Perpustakaan::create([
                    'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
                    'provinsi' => $row[3],
                    'jumlah_buku' => $row[4],
                    'jumlah_judul' => $row[5],
                    'jenis_buku' => $row[6],
                    'jumlah_pengunjung' => $row[7],
                    'sumber_data' => $row[8],
                ]);
            }
        }
    }
}
