<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('hari_praktek')->default('belum ada jadwal');
            $table->string('jam_praktek')->nullable();
            $table->unsignedBigInteger('spesialisasi')->nullable();
            $table->foreign('spesialisasi')->references('id')->on('spesialisasis')->onDelete('cascade')->onUpdate('cascade');
            // $table->unsignedBigInteger('dokter')->nullable();
            // $table->foreign('dokter')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('dokters');
    }
}
