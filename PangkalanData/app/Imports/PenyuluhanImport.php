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
            if ($key >= 2  && ($row[3] != null)) {

                $tgl = ($row[5] - 25569) * 86400;
                $tanggal = gmdate('Y-m-d', $tgl);

                $tgl2 = ($row[6] - 25569) * 86400;
                $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Penyuluhan();
                $data->kota = $row[3];
                $data->nama_kegiatan = $row[4];
                $data->tanggal_awal = $tanggal;
                $data->tanggal_akhir = $tanggal2;
                $data->narasumber = $row[7];
                $data->sasaran = $row[8];
                $data->jumlah_peserta = $row[9];
                $data->materi = $row[10];
                $data->save();
            }
        }
    }
}
