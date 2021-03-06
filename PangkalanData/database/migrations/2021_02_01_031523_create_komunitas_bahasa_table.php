<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomunitasBahasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komunitas_bahasa', function (Blueprint $table) {
            $table->id();
            $table->string("nama_komunitas");
            $table->string("kota");
            $table->string("kecamatan")->nullable();
            $table->string("alamat")->nullable();
            $table->string("koordinat")->nullable();
            $table->longText("keterangan")->nullable();
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
        Schema::dropIfExists('komunitas_bahasa');
    }
}
