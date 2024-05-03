<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekam_medis')->nullable();
            $table->string('name');
            $table->string('umur');
            $table->string('golongan_darah');
            $table->string('nik')->nullable();
            $table->string('tgl_lahir');
            $table->string('pekerjaan');
            $table->string('status_pernikahan');
            $table->string('asuransi');
            $table->string('email');
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
        Schema::dropIfExists('pasiens');
    }
}
