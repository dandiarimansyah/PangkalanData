<?php

namespace App\Imports;

use App\Penelitian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PenelitianImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penelitian([
            'kategori'  => $row['kategori'],
            'unit' => $row['unit'],
            'peneliti' => $row['peneliti'],
            'judul' => $row['judul'],
            'kerja_sama' => $row['kerja_sama'],
            'tanggal_awal' => $row['tanggal_awal'],
            'tanggal_akhir' => $row['tanggal_akhir'],
            'lama_penelitian' => $row['lama_penelitian'],
            'tipe_waktu' => $row['tipe_waktu'],
            'publikasi' => $row['publikasi'],
            'tahun_terbit' => $row['tahun_terbit'],
            'abstrak' => $row['abstrak'],
            'media' => $row['media'],
        ]);
    }
}
