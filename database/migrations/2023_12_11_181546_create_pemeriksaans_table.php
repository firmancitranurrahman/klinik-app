<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi')->nullable();
            $table->string('tgl_pemeriksaan')->nullable();
            $table->string('status')->default('Dalam Antrian');
            $table->string('tinggi_badan')->nullable();
            $table->string('tekanan_darah')->nullable();
            $table->string('suhu')->nullable();
            $table->string('keluhan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->unsignedBigInteger('dokter')->nullable();
            $table->foreign('dokter')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('pelayanan')->nullable();
            $table->foreign('pelayanan')->references('id')->on('pelayanans')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('pasien')->nullable();
            $table->foreign('pasien')->references('id')->on('pasiens')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pemeriksaans');
    }
}
