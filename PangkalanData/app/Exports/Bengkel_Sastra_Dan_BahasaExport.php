<?php

namespace App\Exports;

use App\Models\Bengkel_Sastra_Dan_Bahasa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Bengkel_Sastra_Dan_BahasaExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $nama_kegiatan;
    private $kota;

    public function __construct($nama_kegiatan, $kota)
    {
        $this->nama_kegiatan = $nama_kegiatan;
        $this->kota = $kota;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($request->nama_kegiatan == '' and $request->kota == '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->get();
        } elseif ($request->nama_kegiatan != '' and $request->kota == '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        } elseif ($request->nama_kegiatan == '' and $request->kota != '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->get();
        } elseif ($request->nama_kegiatan != '' and $request->kota != '') {
            $data = Bengkel_Sastra_Dan_Bahasa::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('nama_kegiatan', $request->nama_kegiatan)
                ->get();
        }

        return $data;
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
            $data->provinsi,
            $data->kota,
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
                'Unit',
                'Tahun Anggaran',
                'Nilai Anggaran',
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
                $event->sheet->getStyle('A1:C1')->applyFromArray($bold);
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
