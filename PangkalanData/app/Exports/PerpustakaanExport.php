<?php

namespace App\Exports;

use App\Perpustakaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PerpustakaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Perpustakaan::all();
    }
}
