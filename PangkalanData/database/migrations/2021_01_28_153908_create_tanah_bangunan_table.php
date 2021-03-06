<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanahBangunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanah_bangunan', function (Blueprint $table) {
            $table->id();
            // $table->longText('alamat')->nullable();
            $table->string('status_tanah')->nullable();
            $table->string('sertif_tanah')->nullable();
            $table->string('status_bangunan')->nullable();
            $table->string('imb')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('status_peroleh')->nullable();
            $table->longText('keterangan')->nullable();
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
        Schema::dropIfExists('tanah_bangunan');
    }
}
