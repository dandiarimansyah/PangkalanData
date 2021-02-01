<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenelitianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penelitian', function (Blueprint $table) {
            $table->id();
            $table->string("kategori_penelitian");
            $table->string("unit/satuan_kerja");
            $table->string("peneliti");
            $table->longText("judul");
            $table->string("kerja_sama");
            $table->date("tanggal_mulai_penelitian");
            $table->date("tanggal_selesai_penelitian");
            $table->string("lama_penelitian");
            $table->string("publikasi");
            $table->string("tahun_terbit");
            $table->longText("abstrak");
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
        Schema::dropIfExists('data_penelitian');
    }
}
