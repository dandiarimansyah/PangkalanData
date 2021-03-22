<?php

namespace App\Imports;

use App\Models\Kerja_Sama;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Kerja_SamaImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null)) {

                $tgl = ($row[5] - 25569) * 86400;
                $tanggal = gmdate('Y-m-d', $tgl);

                $tgl2 = ($row[6] - 25569) * 86400;
                $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Kerja_Sama();
                $data->kategori = $row[3];
                $data->instansi = $row[4];
                $data->tanggal_awal = $tanggal;
                $data->tanggal_akhir = $tanggal2;
                $data->nomor = $row[7];
                $data->perihal = $row[8];
                $data->keterangan = $row[9];
                $data->ttd_1 = $row[10];
                $data->instansi_1 = $row[11];
                $data->ttd_2 = $row[12];
                $data->instansi_2 = $row[13];
                $data->save();
            }
        }
    }
}
