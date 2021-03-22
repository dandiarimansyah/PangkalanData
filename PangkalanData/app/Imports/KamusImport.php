<?php

namespace App\Imports;

use App\Models\Kamus;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class KamusImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2  && ($row[3] != null || $row[4] != null || $row[5] != null || $row[8] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Kamus();
                $data->kategori = $row[3];
                $data->judul = $row[4];
                $data->tim_redaksi = $row[5];
                $data->edisi = $row[6];
                $data->no_isbn = $row[7];
                $data->lingkup = $row[8];
                $data->penerbit = $row[9];
                $data->tahun_terbit = $row[10];
                $data->keterangan = $row[11];
                $data->info_produk = $row[12];
                $data->save();
            }
        }
    }
}
