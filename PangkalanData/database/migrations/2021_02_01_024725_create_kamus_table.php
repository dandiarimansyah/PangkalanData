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
            $table->string('edisi');
            $table->string('no_isbn');
            $table->string('lingkup');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->longText('keterangan');
            $table->string('info_produk');
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
