<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisasi_Anggaran extends Model
{
    use HasFactory;

    protected $table = "realisasi_anggaran";

    protected $fillable = ['unit', 'nilai_realisasi', 'besar_dana', 'keterangan'];
}
