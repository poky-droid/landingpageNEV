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
        Schema::create('news_konten', function (Blueprint $table) {
            $table->id();

            $table->foreignId('news_id')
                ->constrained('news')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->enum('tipe', ['text', 'image', 'file']);
            $table->text('isi_text')->nullable();
            $table->string('isi_file')->nullable();
            $table->integer('urutan')->default(1);

            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_konten');
    }
};
