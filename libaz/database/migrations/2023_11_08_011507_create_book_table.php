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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_buku')->unique();
            $table->string('judul_buku', 250);
            $table->string('penulis_buku', 250);
            $table->integer('penerbit_buku');
            $table->integer('tahun_terbit');
            $table->integer('stok_buku');
            $table->unsignedBigInteger('id_rak');
            $table->unsignedBigInteger('id_categori');
            $table->timestamps();

            $table->foreign('id_rak')->references('id')->on('rak');
            $table->foreign('id_categori')->references('id')->on('category_book');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
