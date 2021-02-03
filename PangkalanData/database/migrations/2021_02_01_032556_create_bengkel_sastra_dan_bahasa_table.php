<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBengkelSastraDanBahasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bengkel_sastra_dan_bahasa', function (Blueprint $table) {
            $table->id();
            $table->string("provinsi");
            $table->string("kota");
            $table->string("nama_kegiatan")->nullable();
            $table->date("tanggal_awal_pelaksanaan")->nullable();
            $table->date("tanggal_akhir_pelaksanaan")->nullable();
            $table->string("pemateri")->nullable();
            $table->integer("jumlah_peserta")->nullable();
            $table->integer("jumlah_sekolah")->nullable();
            $table->integer("jumlah_sekolah_yang_dibina")->nullable();
            $table->longText("nama_sekolah_yang_dibina")->nullable();
            $table->longText("aktivitas")->nullable();
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
        Schema::dropIfExists('bengkel_sastra_dan_bahasa');
    }
}
