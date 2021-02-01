<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatForeignKeyPesuluh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesuluh', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penyuluhan')->nullable();
            $table->foreign('id_penyuluhan')->references('id')->on('penyuluhan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesuluh', function (Blueprint $table) {
            //
        });
    }
}
