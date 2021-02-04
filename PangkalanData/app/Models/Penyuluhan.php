<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyuluhan extends Model
{
    use HasFactory;

    protected $table = "penyuluhan";

    protected $fillable = ['provinsi', 'kabupaten/kota', 'nama_kegiatan', 'tanggal_awal', 'tanggal_akhir', 'narasumber', 'sasaran', 'jumlah_peserta', 'materi', 'validasi'];
}
