<?php

namespace App\Exports;

use App\Models\Anggaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;

class AnggaranExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    private $data;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Anggaran::all();
    }

    public function __construct()
    {
        // $this->data = $data;
        $this->data = Anggaran::all();;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return $this->data;
    // }

    public function map($data): array
    {
        return [
            $data->unit,
            $data->tahun_anggaran,
            $data->nilai_anggaran
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Unit',
                'Tahun Anggaran',
                'Nilai Anggaran',
            ]
        ];
    }

    public function styles($sheet)
    {
        $centerAlignment = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ]
        ];

        $titleStyles = [
            'font' => [
                'bold' => true
            ],
        ] + $centerAlignment;

        return [
            1 => $titleStyles,
        ];
    }
}
