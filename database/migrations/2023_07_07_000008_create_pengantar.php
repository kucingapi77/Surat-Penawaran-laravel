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
        Schema::create('pengantar', function (Blueprint $table) {
            $table->string('id_pengantar')->primary();
            $table->string('id_penawaran');
            $table->foreign('id_penawaran')->references('id_penawaran')->on('penawaran');
            $table->string('nama_lembaga');
            $table->string('alamat_tujuan');
            $table->text('isi');
            $table->date('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengantar');
    }
};
