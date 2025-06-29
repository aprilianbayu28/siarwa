<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datawarga', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('gender');
            $table->string('agama');
            $table->string('no_telp');
            $table->unsignedBigInteger('id_alamat')->nullable();
            $table->foreign('id_alamat')->references('id_alamat')->on('alamat')->onDelete('set null');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('status_nikah');
            $table->string('gol_darah');
            $table->string('warganegara');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('email')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datawarga');
    }
};
