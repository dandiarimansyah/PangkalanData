<?php

namespace App\Exports;

use App\Models\Pesuluh;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class PesuluhExportPilih implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $id_penyuluhan;

    public function __construct($id_penyuluhan)
    {
        $this->id_penyuluhan = $id_penyuluhan;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = Pesuluh::where('id_penyuluhan', $this->id_penyuluhan)->get();
        return $data;
    }

    public function map($data): array
    {

        return [
            $data->id_penyuluhan,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'ID Penyuluhan',
                'Nama',
                'Tempat Lahir',
                'Tanggal Lahir',
                'Instansi',
                'Tingkat',
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
