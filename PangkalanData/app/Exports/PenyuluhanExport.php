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

    public function __construct($kota, $nama_kegiatan, $sasaran)
    {
        $this->kota = $kota;
        $this->nama_kegiatan = $nama_kegiatan;
        $this->sasaran = $sasaran;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->kota == '' and $this->nama_kegiatan == '' and $this->sasaran == '') {
            $data = Penyuluhan::all();
        } elseif ($this->kota != '' and $this->nama_kegiatan == '' and $this->sasaran == '') {
            $data = Penyuluhan::where('kota', $this->kota)
                ->get();
        } elseif ($this->kota == '' and $this->nama_kegiatan != '' and $this->sasaran == '') {
            $data = Penyuluhan::where('nama_kegiatan', $this->nama_kegiatan)
                ->get();
        } elseif ($this->kota == '' and $this->nama_kegiatan == '' and $this->sasaran != '') {
            $data = Penyuluhan::where('sasaran', $this->sasaran)
                ->get();
        } elseif ($this->kota != '' and $this->nama_kegiatan != '' and $this->sasaran == '') {
            $data = Penyuluhan::where('kota', $this->kota)
                ->where('nama_kegiatan', $this->nama_kegiatan)
                ->get();
        } elseif ($this->kota != '' and $this->nama_kegiatan == '' and $this->sasaran != '') {
            $data = Penyuluhan::where('kota', $this->kota)
                ->where('sasaran', $this->sasaran)
                ->get();
        } elseif ($this->kota == '' and $this->nama_kegiatan != '' and $this->sasaran != '') {
            $data = Penyuluhan::where('sasaran', $this->sasaran)
                ->where('nama_kegiatan', $this->nama_kegiatan)
                ->get();
        } elseif ($this->kota != '' and $this->nama_kegiatan != '' and $this->sasaran != '') {
            $data = Penyuluhan::where('kota', $this->kota)
                ->where('nama_kegiatan', $this->nama_kegiatan)
                ->where('sasaran', $this->sasaran)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->kota,
            $data->nama_kegiatan,
            \Carbon\Carbon::parse($data->tanggal_awal)->format('d-m-Y'),
            \Carbon\Carbon::parse($data->tanggal_akhir)->format('d-m-Y'),
            $data->narasumber,
            $data->sasaran,
            $data->jumlah_peserta,
            $data->materi,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Kota',
                'Nama Kegiatan',
                'Tanggal Awal',
                'Tanggal Akhir',
                'Narasumber',
                'Sasaran',
                'Jumlah Peserta',
                'Materi',
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
