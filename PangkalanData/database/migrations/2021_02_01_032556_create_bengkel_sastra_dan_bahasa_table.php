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
            $table->string("kabupaten/kota");
            $table->string("nama_kegiatan");
            $table->date("tanggal_awal_pelaksanaan");
            $table->date("tanggal_akhir_pelaksanaan");
            $table->string("pemateri");
            $table->integer("jumlah_peserta");
            $table->integer("jumlah_sekolah");
            $table->integer("jumlah_sekolah_yang_dibina");
            $table->longText("nama_sekolah_yang_dibina");
            $table->longText("aktivitas");
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
