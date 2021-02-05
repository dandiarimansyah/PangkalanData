<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duta_Nasional extends Model
{
    use HasFactory;

    protected $table = "duta_nasional";

    protected $fillable = ['provinsi', 'tahun', 'pemenang_1_1', 'pemenang_1_2', 'pemenang_2_1', 'pemenang_2_2', 'pemenang_3_1', 'pemenang_3_2', 'keterangan', 'media', 'validasi'];
}
