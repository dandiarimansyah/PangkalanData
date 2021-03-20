<?php

namespace App\Imports;

use App\Models\Penyuluhan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PenyuluhanImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Penyuluhan::create([
                    'kota' => $row[3],
                    'nama_kegiatan' => $row[4],
                    'tanggal_awal' => $row[5],
                    'tanggal_akhir' => $row[6],
                    'narasumber' => $row[7],
                    'sasaran' => $row[8],
                    'jumlah_peserta' => $row[9],
                    'materi' => $row[10],
                ]);
            }
        }
    }
}
