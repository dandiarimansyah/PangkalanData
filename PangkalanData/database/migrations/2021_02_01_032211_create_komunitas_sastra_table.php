<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomunitasSastraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komunitas_sastra', function (Blueprint $table) {
            $table->id();
            $table->string("nama_komunitas");
            $table->string("provinsi");
            $table->string("kabupaten/kota");
            $table->string("kecamatan")->nullable();
            $table->string("alamat")->nullable();
            $table->string("koordinat")->nullable();
            $table->longText("keterangan")->nullable();
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
        Schema::dropIfExists('komunitas_sastra');
    }
}
