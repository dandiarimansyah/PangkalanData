<?php

namespace App\Exports;

use App\Duta_Provinsi;
use Maatwebsite\Excel\Concerns\FromCollection;

class Duta_ProvinsiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Duta_Provinsi::all();
    }
}
