<?php

namespace App\Exports;

use App\Penyuluhan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenyuluhanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penyuluhan::all();
    }
}
