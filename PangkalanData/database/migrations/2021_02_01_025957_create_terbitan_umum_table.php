<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerbitanUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terbitan_umum', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('judul');
            $table->string('penulis')->nullable();
            $table->string('no_isbn')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->string('info_produk')->nullable();
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
        Schema::dropIfExists('terbitan_umum');
    }
}
