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
        Schema::create('featured_news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul berita
            $table->text('description'); // Deskripsi singkat
            $table->string('thumbnail'); // URL atau path gambar thumbnail
            $table->string('category')->nullable(); // Kategori berita
            $table->date('published_at')->nullable(); // Tanggal publikasi
            $table->string('link')->nullable(); // Link ke detail berita
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_news');
    }
};
