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
        Schema::table('users', function (Blueprint $table) {
            $table->longText('alamat')->nullable();
            $table->string('nomor')->nullable();
            $table->string('jabatan_tp')->nullable();
            $table->string('opd_tp')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir_tp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
