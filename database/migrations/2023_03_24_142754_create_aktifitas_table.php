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
        Schema::create('aktifitas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->date('tanggal')->nullable();
            $table->integer('kegiatan_id')->nullable();
            $table->string('durasi_menit')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->longText('output')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktifitas');
    }
};
