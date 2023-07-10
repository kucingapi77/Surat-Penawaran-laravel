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
        Schema::create('penawaran_server', function (Blueprint $table) {
            $table->string('id_penawaran_server')->primary();
            $table->date('tanggal_penawaran');
            $table->string('lampiran');
            $table->string('nama_lembaga');
            $table->string('alamat');
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penawaran_server');
    }
};
