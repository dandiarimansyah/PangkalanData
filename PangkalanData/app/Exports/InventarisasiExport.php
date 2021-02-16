<?php

namespace App\Exports;

use App\Inventarisasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class InventarisasiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inventarisasi::all();
    }
}
