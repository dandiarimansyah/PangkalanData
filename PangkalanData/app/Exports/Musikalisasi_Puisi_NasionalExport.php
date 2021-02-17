<?php

namespace App\Exports;

use App\Models\Musikalisasi_Puisi_Nasional;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Musikalisasi_Puisi_NasionalExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $pemenang;
    private $tahun;

    public function __construct($pemenang, $tahun)
    {
        $this->pemenang = $pemenang;
        $this->tahun = $tahun;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->tahun == '' and $this->pemenang == '') {
            $data = Musikalisasi_Puisi_Nasional::all();
        } else if ($this->tahun != '' and $this->pemenang == '') {
            $data = Musikalisasi_Puisi_Nasional::where('tahun', $this->tahun)
                ->get();
        } else if ($this->tahun == '' and $this->pemenang != '') {
            $data = Musikalisasi_Puisi_Nasional::where('pemenang_1', $this->pemenang)
                ->orWhere('pemenang_2', $this->pemenang)
                ->orWhere('pemenang_3', $this->pemenang)
                ->get();
        } else {
            $data = Musikalisasi_Puisi_Nasional::where('tahun', $this->tahun)
                ->where('pemenang_1', $this->pemenang)
                ->orWhere('pemenang_2', $this->pemenang)
                ->orWhere('pemenang_3', $this->pemenang)
                ->get();
        }

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->provinsi,
            $data->pemenang,
            $data->tanggal_awal_pelaksanaan,
            $data->tanggal_akhir_pelaksanaan,
            $data->nama_kegiatan,
            $data->pemateri,
            $data->jumlah_peserta,
            $data->jumlah_sekolah_yang_dibina,
            $data->nama_sekolah_yang_dibina,
            $data->aktivitas,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Provinsi',
                'Kota',
                'Tanggal Awal',
                'Tanggal Akhir',
                'Nama Kegiatan',
                'Pemateri',
                'Jumlah Peserta',
                'Jumlah Sekolah Binaan',
                'Nama Sekolah Binaan',
                'Aktivitas',
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
