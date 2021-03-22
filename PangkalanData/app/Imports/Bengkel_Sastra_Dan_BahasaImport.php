<?php

namespace App\Imports;

use App\Models\Bengkel_Sastra_Dan_Bahasa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Bengkel_Sastra_Dan_BahasaImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && $row[3] != null) {

                dd($row[5]);

                $tgl = explode("/", $row[5]);
                $tanggal = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

                $tgl2 = explode("/", $row[6]);
                $tanggal2 = $tgl2[2] . "-" . $tgl2[1] . "-" . $tgl2[0];

                $data = new Bengkel_Sastra_Dan_Bahasa();
                $data->kota = $row[3];
                $data->nama_kegiatan = $row[4];
                $data->tanggal_awal_pelaksanaan = $tanggal;
                $data->tanggal_akhir_pelaksanaan = $tanggal2;
                $data->pemateri = $row[7];
                $data->jumlah_peserta = $row[8];
                $data->jumlah_sekolah = $row[9];
                $data->jumlah_sekolah_yang_dibina = $row[10];
                $data->nama_sekolah_yang_dibina = $row[11];
                $data->aktivitas = $row[12];
                $data->save();
            }
        }
    }
}
