<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // ==== All Role ====  //
            $table->string('name');
            $table->string('email')->unique();
            $table->string('no_hp')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alamat')->nullable();
            $table->string('password')->nullable();
            // === Role Dokter === //
            $table->string('spesialisasi')->nullable();
            // === Role Pasien === //
            $table->string('umur',10)->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('asuransi')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
