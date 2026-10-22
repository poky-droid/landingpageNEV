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
        Schema::create('modul_anggota', function (Blueprint $table) {
            $table->id();

            $table->foreignId('modul_id')
                ->constrained('modul')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('anggota_id')
                ->constrained('anggota')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_anggota');
    }
};
