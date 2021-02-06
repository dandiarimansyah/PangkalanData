<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepegawaian extends Model
{
    use HasFactory;

    protected $table = "kepegawaian";

    protected $fillable = ['tanggal_diperbarui', 'unit', 'semua_kelamin', 'laki', 'perempuan', 'S3', 'S2', 'S1', 'D3', 'SMA', 'SMP', 'SD', '4E', '4D', '4C', '4B', '4A', '3D', '3C', '3B', '3A', '2D', '2C', '2B', '2A', '1D', '1C', '1B', '1A', 'validasi'];
}
