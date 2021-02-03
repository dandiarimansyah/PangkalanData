<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghargaanBahasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghargaan_bahasa', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('tahun')->nullable();
            $table->longText('deskripsi')->nullable();
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
        Schema::dropIfExists('penghargaan_bahasa');
    }
}
