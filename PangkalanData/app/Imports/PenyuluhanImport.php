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
            if ($key >= 1) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Penyuluhan::create([
                    'provinsi' => $row[3],
                    'kota' => $row[4],
                    'nama_kegiatan' => $row[5],
                    'tanggal_awal' => $row[6],
                    'tanggal_akhir' => $row[7],
                    'narasumber' => $row[8],
                    'sasaran' => $row[9],
                    'jumlah_peserta' => $row[10],
                    'materi' => $row[11],
                ]);
            }
        }
    }
}
