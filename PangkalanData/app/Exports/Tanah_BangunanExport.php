<?php

namespace App\Exports;

use App\Models\Tanah_Bangunan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Tanah_BangunanExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $status_tanah;
    private $status_bangunan;

    public function __construct($status_tanah, $status_bangunan)
    {
        $this->status_tanah = $status_tanah;
        $this->status_bangunan = $status_bangunan;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->status_tanah == 'semua' and $this->status_bangunan == 'semua') {
            $data = Tanah_Bangunan::all();
        } else if ($this->status_tanah == 'semua' or $this->status_bangunan == 'semua') {
            $data = Tanah_Bangunan::where('status_tanah', $this->status_tanah)
                ->orWhere('status_bangunan', $this->status_bangunan)
                ->get();
        } else {
            $data = Tanah_Bangunan::where('status_tanah', $this->status_tanah)
                ->where('status_bangunan', $this->status_bangunan)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->updated_at->format('d-m-Y'),
            $data->alamat,
            $data->status_tanah,
            $data->sertif_tanah,
            $data->status_bangunan,
            $data->imb,
            $data->kondisi,
            $data->status_peroleh,
            $data->keterangan,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Tanggal Data',
                'Alamat',
                'Status Tanah',
                'Sertif Tanah',
                'Status Bangunan',
                'IMB',
                'Kondisi Bangunan',
                'Status Pemerolehan',
                'Keterangan',
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
