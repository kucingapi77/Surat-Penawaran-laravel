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
        Schema::create('footer_surat', function (Blueprint $table) {
            $table->string('id_primary')->primary()->autoIncrement();
            $table->string('nama_perusahaan');
            $table->string('nama_lembaga_tujuan');
            $table->string('alamat_perusahaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_surat');
    }
};
