<?php

namespace App\Imports;

use App\Models\Penyuluhan;
use App\Imports\Date;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

// use Illuminate\Support\Carbon;
use Carbon\Carbon;

class PenyuluhanImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2  && ($row[3] != null)) {

                $tgl = explode("/", $row[5]);
                $tanggal = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

                $tgl2 = explode("/", $row[6]);
                $tanggal2 = $tgl2[2] . "-" . $tgl2[1] . "-" . $tgl2[0];

                // $tgl = ($row[5] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[6] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

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
