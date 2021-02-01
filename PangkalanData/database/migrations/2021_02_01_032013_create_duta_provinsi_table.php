<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDutaProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duta_provinsi', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->string('tahun');
            $table->string('pemenang_1_1');
            $table->string('pemenang_1_2');
            $table->string('pemenang_2_1');
            $table->string('pemenang_2_2');
            $table->string('pemenang_3_1');
            $table->string('pemenang_3_2');
            $table->string('favorit_1');
            $table->string('favorit_2');
            $table->longText('keterangan');
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
        Schema::dropIfExists('duta_provinsi');
    }
}
