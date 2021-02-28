<?php

namespace App\Imports;

use App\Models\Penelitian;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PenelitianImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Penelitian::create([
                    // 'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
                    'kategori' => $row[3],
                    'peneliti' => $row[4],
                    'judul' => $row[5],
                    'kerja_sama' => $row[6],
                    'tanggal_awal' => $row[7],
                    'tanggal_akhir' => $row[8],
                    'lama_penelitian' => $row[9],
                    'tipe_waktu' => $row[10],
                    'publikasi' => $row[11],
                    'tahun_terbit' => $row[12],
                    'abstrak' => $row[13],
                ]);
            }
        }
    }
}
