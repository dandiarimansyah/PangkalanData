<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkel_Sastra_Dan_Bahasa extends Model
{
    use HasFactory;

    protected $table = "bengkel_sastra_dan_bahasa";

    protected $fillable = ['provinsi', 'kabupaten/kota', 'nama_kegiatan', 'tanggal_awal_pelaksaaan', 'tanggal_akhir_pelaksaaan', 'pemateri', 'jumlah_peserta', 'jumlah_sekolah', 'jumlah_sekolah_yang_dibina', 'nama_sekolah_yang_dibina', 'aktivitas', 'media', 'validasi'];
}
