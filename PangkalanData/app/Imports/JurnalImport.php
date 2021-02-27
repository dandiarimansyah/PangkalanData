<?php

namespace App\Imports;

use App\Models\Jurnal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class JurnalImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 1) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Jurnal::create([
                    'kategori' => $row[3],
                    'judul' => $row[4],
                    'tim_redaksi' => $row[5],
                    'volume' => $row[6],
                    'no_issn' => $row[7],
                    'lingkup' => $row[8],
                    'penerbit' => $row[9],
                    'tahun_terbit' => $row[10],
                    'keterangan' => $row[11],
                    'info_produk' => $row[12],
                ]);
            }
        }
    }
}
