<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas_Sastra extends Model
{
    use HasFactory;

    protected $table = "komunitas_sastra";

    protected $fillable = ['nama_komunitas', 'kota', 'kecamatan', 'alamat', 'koordinat', 'keterangan', 'validasi'];
}
