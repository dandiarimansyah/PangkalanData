<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musikalisasi_Puisi_Nasional extends Model
{
    use HasFactory;

    protected $table = "musikalisasi_puisi_nasional";

    protected $fillable = ['tahun', 'pemenang_1', 'pemenang_2', 'pemenang_3', 'favorit', 'keterangan', 'media', 'validasi'];
}
