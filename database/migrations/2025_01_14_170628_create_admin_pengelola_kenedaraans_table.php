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
        Schema::create('admin_pengelola_kendaraan', function (Blueprint $table) {
            $table->string('id_admin')->primary();
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->integer('isDeleted')->default(0)->nullable();
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
        Schema::dropIfExists('admin_pengelola_kenedaraan');
    }
};
