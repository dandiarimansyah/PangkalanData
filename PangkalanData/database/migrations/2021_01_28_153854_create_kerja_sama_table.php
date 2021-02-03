<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjaSamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja_sama', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('instansi');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir')->nullable();
            $table->string('nomor')->nullable();
            $table->longText('perihal')->nullable();
            $table->longText('keterangan')->nullable();
            $table->string('ttd_1')->nullable();
            $table->string('instansi_1')->nullable();
            $table->string('ttd_2')->nullable();
            $table->string('instansi_2')->nullable();
            $table->enum('validasi', ['belum', 'sudah'])->default('belum');
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
        Schema::dropIfExists('kerja_sama');
    }
}
