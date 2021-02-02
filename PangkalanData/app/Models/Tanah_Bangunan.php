<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanah_Bangunan extends Model
{
    use HasFactory;

    protected $table = "tanah_bangunan";

    protected $fillable = ['kantor', 'alamat', 'status_tanah', 'sertif_tanah', 'status_bangunan', 'imb', 'kondisi', 'status', 'keterangan'];
}
