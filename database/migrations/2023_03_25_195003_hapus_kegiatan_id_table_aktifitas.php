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
        Schema::table('aktifitas', function (Blueprint $table) {
            $table->dropColumn('kegiatan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aktifitas', function (Blueprint $table) {
            $table->integer('kegiatan_id');
        });
    }
};
