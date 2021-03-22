<?php

namespace App\Imports;

use App\Models\Terbitan_Umum;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Terbitan_UmumImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2  && ($row[3] != null || $row[4] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Terbitan_Umum();
                $data->kategori = $row[3];
                $data->judul = $row[4];
                $data->penulis = $row[5];
                $data->no_isbn = $row[6];
                $data->tahun_terbit = $row[7];
                $data->deskripsi = $row[8];
                $data->info_produk = $row[9];
                $data->save();
            }
        }
    }
}
