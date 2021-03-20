<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_buku')->nullable();
            $table->integer('jumlah_judul')->nullable();
            $table->longText('jenis_buku')->nullable();
            $table->integer('jumlah_pengunjung')->nullable();
            $table->string('sumber_data')->nullable();
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
        Schema::dropIfExists('perpustakaan');
    }
}
