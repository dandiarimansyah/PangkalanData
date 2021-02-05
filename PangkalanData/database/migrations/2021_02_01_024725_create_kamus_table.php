<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamus', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('judul');
            $table->string('tim_redaksi');
            $table->string('edisi')->nullable();
            $table->string('no_isbn')->nullable();
            $table->string('lingkup');
            $table->string('penerbit')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->longText('keterangan')->nullable();
            $table->string('info_produk')->nullable();
            $table->string('media')->nullable();
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
        Schema::dropIfExists('kamus');
    }
}
