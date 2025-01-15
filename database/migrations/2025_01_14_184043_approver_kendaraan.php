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
        Schema::create('approver_kendaraan', function (Blueprint $table) {
            $table->string('kode_approver')->primary();
            $table->string('email');
            $table->string('password');
            $table->integer('level');
            $table->string('kode_karyawan');
            $table->foreign('kode_karyawan')->references('kode_karyawan')->on('karyawan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approver_kendaraan');
    }
};
