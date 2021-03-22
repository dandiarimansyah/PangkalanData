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
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null || $row[13] != null)) {

                $tgl = ($row[7] - 25569) * 86400;
                $tanggal = gmdate('Y-m-d', $tgl);

                $tgl2 = ($row[8] - 25569) * 86400;
                $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Penelitian();
                $data->kategori = $row[3];
                $data->peneliti = $row[4];
                $data->judul = $row[5];
                $data->kerja_sama = $row[6];
                $data->tanggal_awal = $tanggal;
                $data->tanggal_akhir = $tanggal2;
                $data->lama_penelitian = $row[9];
                $data->tipe_waktu = $row[10];
                $data->publikasi = $row[11];
                $data->tahun_terbit = $row[12];
                $data->abstrak = $row[13];
                $data->save();
            }
        }
    }
}
