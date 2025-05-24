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
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jalan')->nullable();
            $table->foreign('id_jalan')->references('id')->on('jalans')->onDelete('set null');
            $table->string('rt');
            $table->string('rw');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kota');
            $table->string('provinsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat');
    }
};
