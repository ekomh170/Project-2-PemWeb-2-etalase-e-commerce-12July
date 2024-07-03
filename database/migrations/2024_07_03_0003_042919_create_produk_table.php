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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10); // Menambahkan kolom kode
            $table->string('nama', 45); // Menambahkan kolom nama 
            $table->double('harga'); // Menambahkan kolom harga
            $table->integer('stok'); // Menambahkan kolom stok
            $table->integer('rating'); // Menambahkan kolom rating
            $table->integer('min_stok'); // Menambahkan kolom min_stok
            $table->text('deskripsi'); // Menambahkan kolom deskripsi
            $table->foreignId('jenis_produk_id')->constrained('jenis_produk'); // Menambahkan foreign key ke tabel jenis_produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
