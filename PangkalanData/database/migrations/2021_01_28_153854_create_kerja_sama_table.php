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
            $table->date('tanggal_akhir');
            $table->string('nomor');
            $table->longText('perihal');
            $table->longText('keterangan');
            $table->string('ttd_1');
            $table->string('instansi_1');
            $table->string('ttd_2');
            $table->string('instansi_2');
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
