<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyuluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyuluhan', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->string('kabupaten/kota');
            $table->string('nama_kegiatan');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->string('narasumber');
            $table->string('sasaran');
            $table->integer('jumlah_peserta');
            $table->longText('materi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyuluhan');
    }
}
