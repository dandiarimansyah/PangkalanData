<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musikalisasi_Puisi_Provinsi extends Model
{
    use HasFactory;

    protected $table = "musikalisasi_puisi_provinsi";

    protected $fillable = ['provinsi', 'tahun', 'pemenang_1', 'pemenang_2', 'pemenang_3', 'favorit', 'keterangan'];
}
