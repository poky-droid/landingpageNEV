<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();

            $table->foreignId('anggota_id')
                ->nullable()
                ->constrained('anggota')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps(); // created_at + updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};