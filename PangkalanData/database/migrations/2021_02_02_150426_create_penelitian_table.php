<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian', function (Blueprint $table) {
            $table->id();
            $table->string("kategori");
            $table->string("unit");
            $table->string("peneliti");
            $table->string("judul");
            $table->string("kerja_sama")->nullable();
            $table->string("tanggal_awal")->nullable();
            $table->string("tanggal_akhir")->nullable();
            $table->string("lama_penelitian")->nullable();
            $table->string("tipe_waktu")->nullable();
            $table->string("publikasi")->nullable();
            $table->string("tahun_terbit")->nullable();
            $table->string("abstrak");
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
        Schema::dropIfExists('penelitian');
    }
}
