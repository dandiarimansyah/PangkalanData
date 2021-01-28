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
            $table->integer('semua_kelamin');
            $table->integer('laki');
            $table->integer('perempuan');
            $table->integer('S3');
            $table->integer('S2');
            $table->integer('S1');
            $table->integer('D3');
            $table->integer('SMA');
            $table->integer('SMP');
            $table->integer('SD');
            $table->integer('4E');
            $table->integer('4D');
            $table->integer('4C');
            $table->integer('4B');
            $table->integer('4A');
            $table->integer('3D');
            $table->integer('3C');
            $table->integer('3B');
            $table->integer('3A');
            $table->integer('2D');
            $table->integer('2C');
            $table->integer('2B');
            $table->integer('2A');
            $table->integer('1D');
            $table->integer('1C');
            $table->integer('1B');
            $table->integer('1A');
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
