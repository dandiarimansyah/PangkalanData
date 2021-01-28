<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarisasi', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('tahun_anggaran');
            $table->integer('laptop');
            $table->integer('komputer');
            $table->integer('printer');
            $table->integer('fotocopy');
            $table->integer('faximili');
            $table->integer('LCD');
            $table->integer('TV');
            $table->integer('lain-lain');
            $table->integer('furniture');
            $table->integer('roda_dua');
            $table->integer('roda_empat');
            $table->integer('roda_enam');
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
        Schema::dropIfExists('inventarisasi');
    }
}
