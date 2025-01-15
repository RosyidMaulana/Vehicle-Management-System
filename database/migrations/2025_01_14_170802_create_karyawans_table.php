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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->string('kode_karyawan')->primary();
            $table->string('nama');
            $table->string('bagian');
            $table->string('jabatan');
            $table->string('no_tlp');
            $table->string('kode_unit_kerja');
            $table->foreign('kode_unit_kerja')->references('kode_unit_kerja')->on('unit_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
