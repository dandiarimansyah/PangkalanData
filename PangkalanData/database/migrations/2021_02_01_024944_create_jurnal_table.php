<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('judul');
            $table->string('tim_redaksi');
            $table->string('volume');
            $table->string('no_issn');
            $table->string('lingkup');
            $table->string('penerbit');
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
        Schema::dropIfExists('jurnal');
    }
}
