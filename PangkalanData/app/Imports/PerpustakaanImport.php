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
            if ($key >= 2  && ($row[5] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Perpustakaan::create([
                    'jumlah_buku' => $row[3],
                    'jumlah_judul' => $row[4],
                    'jenis_buku' => $row[5],
                    'jumlah_pengunjung' => $row[6],
                    'sumber_data' => $row[7],
                ]);
            }
        }
    }
}
