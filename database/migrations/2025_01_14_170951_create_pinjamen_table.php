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
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->string('kode_pinjaman')->primary();
            $table->string('kode_pengajuan');
            $table->string('status_pengembalian');
            $table->string('deskripsi_kondisi_kendaraan');
            $table->foreign('kode_pengajuan')->references('kode_pengajuan')->on('pengajuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman');
    }
};
