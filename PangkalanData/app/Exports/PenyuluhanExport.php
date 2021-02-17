<?php

namespace App\Exports;

use App\Models\Penyuluhan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class PenyuluhanExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $kota;
    private $nama_kegiatan;
    private $sasaran;
    private $provinsi;

    public function __construct($kota, $nama_kegiatan, $sasaran, $provinsi)
    {
        $this->kota = $kota;
        $this->nama_kegiatan = $nama_kegiatan;
        $this->sasaran = $sasaran;
        $this->provinsi = $provinsi;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->kota == '' and $this->nama_kegiatan == '' and $this->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->get();
        } elseif ($this->kota != '' and $this->nama_kegiatan == '' and $this->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->where('kota', $this->kota)
                ->get();
        } elseif ($this->kota == '' and $this->nama_kegiatan != '' and $this->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->where('nama_kegiatan', $this->nama_kegiatan)
                ->get();
        } elseif ($this->kota == '' and $this->nama_kegiatan == '' and $this->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->where('sasaran', $this->sasaran)
                ->get();
        } elseif ($this->kota != '' and $this->nama_kegiatan != '' and $this->sasaran == '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->where('kota', $this->kota)
                ->where('nama_kegiatan', $this->nama_kegiatan)
                ->get();
        } elseif ($this->kota != '' and $this->nama_kegiatan == '' and $this->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->where('kota', $this->kota)
                ->where('sasaran', $this->sasaran)
                ->get();
        } elseif ($this->kota == '' and $this->nama_kegiatan != '' and $this->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->where('sasaran', $this->sasaran)
                ->where('nama_kegiatan', $this->nama_kegiatan)
                ->get();
        } elseif ($this->kota != '' and $this->nama_kegiatan != '' and $this->sasaran != '') {
            $data = Penyuluhan::where('provinsi', $this->provinsi)
                ->where('kota', $this->kota)
                ->where('nama_kegiatan', $this->nama_kegiatan)
                ->where('sasaran', $this->sasaran)
                ->get();
        }

        return $data;
    }

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
