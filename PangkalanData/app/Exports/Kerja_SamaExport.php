<?php

namespace App\Exports;

use App\Models\Kerja_Sama;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Kerja_SamaExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $perihal;
    private $kategori;

    public function __construct($perihal, $kategori)
    {
        $this->perihal = $perihal;
        $this->kategori = $kategori;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->kategori == 'semua' and $this->perihal == '') {
            $data = Kerja_Sama::all();
        } else {
            $data = Kerja_Sama::where('perihal', $this->perihal)
                ->orWhere('kategori', $this->kategori)
                ->get();
        }

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->kategori,
            $data->instansi,
            $data->tanggal_awal,
            $data->tanggal_akhir,
            $data->nomor,
            $data->perihal,
            $data->keterangan,
            $data->ttd_1,
            $data->instansi_1,
            $data->ttd_2,
            $data->instansi_2,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Kategori',
                'Instansi',
                'Tanggal Awal',
                'Tanggal Akhir',
                'Nomor',
                'Perihal',
                'Keterangan',
                'TTD 1',
                'Instansi 1',
                'TTD 2',
                'Instansi 2',
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
