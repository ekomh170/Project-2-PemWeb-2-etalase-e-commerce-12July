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
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable(); // Menambahkan kolom tanggal
            $table->string('nama_tokoh', 45)->nullable(); // Menambahkan kolom nama_tokoh
            $table->string('komentar', 200)->nullable(); // Menambahkan kolom komentar
            $table->integer('rating')->nullable(); // Menambahkan kolom rating
            $table->foreignId('produk_id')->constrained('produk'); // Menambahkan foreign key ke tabel produk
            $table->foreignId('kategori_tokoh_id')->constrained('kategori_tokoh'); // Menambahkan foreign key ke tabel kategori_tokoh
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimoni');
    }
};
