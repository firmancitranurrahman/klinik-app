<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayananPemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanan_pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelayanan_id');
            $table->unsignedBigInteger('pemeriksaan_id');
            $table->timestamps();
            $table->foreign('pelayanan_id')->references('id')->on('pelayanans')->onDelete('cascade');
            $table->foreign('pemeriksaan_id')->references('id')->on('pemeriksaans')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayanan_pemeriksaan');
    }
}
