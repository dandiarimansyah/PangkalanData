<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepegawaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepegawaian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_diperbarui');
            $table->string('unit');
            $table->integer('semua_kelamin')->nullable();
            $table->integer('laki')->nullable();
            $table->integer('perempuan')->nullable();
            $table->integer('S3')->nullable();
            $table->integer('S2')->nullable();
            $table->integer('S1')->nullable();
            $table->integer('D3')->nullable();
            $table->integer('SMA')->nullable();
            $table->integer('SMP')->nullable();
            $table->integer('SD')->nullable();
            $table->integer('T_4E')->nullable();
            $table->integer('T_4D')->nullable();
            $table->integer('T_4C')->nullable();
            $table->integer('T_4B')->nullable();
            $table->integer('T_4A')->nullable();
            $table->integer('T_3D')->nullable();
            $table->integer('T_3C')->nullable();
            $table->integer('T_3B')->nullable();
            $table->integer('T_3A')->nullable();
            $table->integer('T_2D')->nullable();
            $table->integer('T_2C')->nullable();
            $table->integer('T_2B')->nullable();
            $table->integer('T_2A')->nullable();
            $table->integer('T_1D')->nullable();
            $table->integer('T_1C')->nullable();
            $table->integer('T_1B')->nullable();
            $table->integer('T_1A')->nullable();
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
        Schema::dropIfExists('kepegawaian');
    }
}
