<?php

namespace App\Exports;

use App\Musikalisasi_Puisi_Provinsi;
use Maatwebsite\Excel\Concerns\FromCollection;

class Musikalisasi_Puisi_ProvinsiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Musikalisasi_Puisi_Provinsi::all();
    }
}
