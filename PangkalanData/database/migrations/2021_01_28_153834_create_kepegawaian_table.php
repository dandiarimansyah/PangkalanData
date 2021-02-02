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
            $table->integer('4E')->nullable();
            $table->integer('4D')->nullable();
            $table->integer('4C')->nullable();
            $table->integer('4B')->nullable();
            $table->integer('4A')->nullable();
            $table->integer('3D')->nullable();
            $table->integer('3C')->nullable();
            $table->integer('3B')->nullable();
            $table->integer('3A')->nullable();
            $table->integer('2D')->nullable();
            $table->integer('2C')->nullable();
            $table->integer('2B')->nullable();
            $table->integer('2A')->nullable();
            $table->integer('1D')->nullable();
            $table->integer('1C')->nullable();
            $table->integer('1B')->nullable();
            $table->integer('1A')->nullable();
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
