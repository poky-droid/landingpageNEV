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
        Schema::create('sponsor', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->string('gambar')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->string('website')->nullable();
            $table->string('kontak', 100)->nullable();
            $table->integer('urutan')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsor');
    }
};
