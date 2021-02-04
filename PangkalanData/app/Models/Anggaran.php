<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    use HasFactory;

    protected $table = "anggaran";

    protected $fillable = ['unit', 'tahun_anggaran', 'nilai_anggaran', 'validasi'];
}
