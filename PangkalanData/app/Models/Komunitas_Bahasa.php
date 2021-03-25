<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas_Bahasa extends Model
{
    use HasFactory;

    protected $table = "komunitas_bahasa";

    protected $fillable = ['nama_komunitas', 'kota', 'kecamatan', 'alamat', 'koordinat', 'keterangan', 'validasi'];
}
