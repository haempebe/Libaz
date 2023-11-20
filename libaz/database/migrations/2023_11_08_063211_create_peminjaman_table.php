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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_peminjam');
            $table->unsignedBigInteger('id_buku');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->timestamps();

            $table->foreign('id_peminjam')->references('id')->on('users');
            $table->foreign('id_buku')->references('id')->on('book');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
