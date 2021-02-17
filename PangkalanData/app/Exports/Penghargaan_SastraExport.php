<?php

namespace App\Exports;

use App\Models\Penghargaan_Sastra;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Penghargaan_SastraExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $kategori;
    private $tahun;
    private $deskripsi;

    public function __construct($kategori, $tahun, $deskripsi)
    {
        $this->kategori = $kategori;
        $this->tahun = $tahun;
        $this->deskripsi = $deskripsi;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->kategori == '' and $this->tahun == '' and $this->deskripsi == '') {
            $data = Penghargaan_Sastra::all();
        } elseif ($this->kategori != '' and $this->tahun == '' and $this->deskripsi == '') {
            $data = Penghargaan_Sastra::where('kategori', $this->kategori)
                ->get();
        } elseif ($this->kategori == '' and $this->tahun != '' and $this->deskripsi == '') {
            $data = Penghargaan_Sastra::where('tahun', $this->tahun)
                ->get();
        } elseif ($this->kategori == '' and $this->tahun == '' and $this->deskripsi != '') {
            $data = Penghargaan_Sastra::where('deskripsi', $this->deskripsi)
                ->get();
        } elseif ($this->kategori != '' and $this->tahun != '' and $this->deskripsi == '') {
            $data = Penghargaan_Sastra::where('kategori', $this->kategori)
                ->where('tahun', $this->tahun)
                ->get();
        } elseif ($this->kategori != '' and $this->tahun == '' and $this->deskripsi != '') {
            $data = Penghargaan_Sastra::where('deskripsi', $this->deskripsi)
                ->where('kategori', $this->kategori)
                ->get();
        } elseif ($this->kategori == '' and $this->tahun != '' and $this->deskripsi != '') {
            $data = Penghargaan_Sastra::where('deskripsi', $this->deskripsi)
                ->where('tahun', $this->tahun)
                ->get();
        } elseif ($this->kategori != '' and $this->tahun != '' and $this->deskripsi != '') {
            $data = Penghargaan_Sastra::where('tahun', $this->tahun)
                ->where('kategori', $this->kategori)
                ->where('deskripsi', $this->deskripsi)
                ->get();
        }

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->provinsi,
            $data->kategori,
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
