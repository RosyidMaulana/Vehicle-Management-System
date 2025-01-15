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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_polisi')->primary();
            $table->string('jenis');
            $table->string('harga_bbm');
            $table->date('jadwal_service');
            $table->string('kode_karyawan')->nullable();
            $table->foreign('kode_karyawan')->references('kode_karyawan')->on('karyawan');
            $table->integer('ketersediaan')->default(0)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
