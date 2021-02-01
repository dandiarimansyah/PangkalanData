<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusikalisasiPuisiProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musikalisasi_puisi_provinsi', function (Blueprint $table) {
            $table->id();
            $table->string("provinsi");
            $table->string("tahun");
            $table->string("pemenang_1");
            $table->string("pemenang_2");
            $table->string("pemenang_3");
            $table->string("favorit");
            $table->string("keterangan");
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
        Schema::dropIfExists('musikalisasi_puisi_provinsi');
    }
}
