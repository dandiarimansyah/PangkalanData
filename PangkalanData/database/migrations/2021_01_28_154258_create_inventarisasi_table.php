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
            $table->integer('laptop')->nullable();
            $table->integer('komputer')->nullable();
            $table->integer('printer')->nullable();
            $table->integer('fotocopy')->nullable();
            $table->integer('faximili')->nullable();
            $table->integer('LCD')->nullable();
            $table->integer('TV')->nullable();
            $table->integer('lain-lain')->nullable();
            $table->integer('furniture')->nullable();
            $table->integer('roda_dua')->nullable();
            $table->integer('roda_empat')->nullable();
            $table->integer('roda_enam')->nullable();
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
