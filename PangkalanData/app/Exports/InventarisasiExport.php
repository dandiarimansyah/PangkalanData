<?php

namespace App\Exports;

use App\Models\Inventarisasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class InventarisasiExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = Inventarisasi::all()->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->tahun_anggaran,
            $data->laptop,
            $data->komputer,
            $data->printer,
            $data->fotocopy,
            $data->faximili,
            $data->LCD,
            $data->TV,
            $data->lain,
            $data->furniture,
            $data->roda_dua,
            $data->roda_empat,
            $data->roda_enam,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Tahun Anggaran',
                'Laptop',
                'Komputer',
                'Printer',
                'Fotocopy',
                'Faximili',
                'LCD',
                'TV',
                'Lain-Lain',
                'Furniture',
                'Roda Dua',
                'Roda Empat',
                'Roda Enam',
            ]
        ];
    }

    public function registerEvents(): array
    {

        $bold = [
            'font' => [
                'bold' => true
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];

        $center = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];

        return [
            AfterSheet::class => function (AfterSheet $event) use ($bold, $center) {
                $event->sheet->getStyle('A1:S1')->applyFromArray($bold);
            }
        ];
    }

    // public function styles($sheet)
    // {
    //     $sheet->setStyle(array(
    //         'aligment' => array(
    //             'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    //         )
    //     ));
    // }
}
