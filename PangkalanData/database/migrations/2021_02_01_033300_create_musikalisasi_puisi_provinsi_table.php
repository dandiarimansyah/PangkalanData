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
            $table->string("tahun")->nullable();
            $table->string("pemenang_1")->nullable();
            $table->string("pemenang_2")->nullable();
            $table->string("pemenang_3")->nullable();
            $table->string("favorit")->nullable();
            $table->string("keterangan")->nullable();
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
