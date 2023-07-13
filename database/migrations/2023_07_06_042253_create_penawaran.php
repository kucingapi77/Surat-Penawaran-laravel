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
        Schema::create('penawaran', function (Blueprint $table) {
            $table->string('id_penawaran')->primary();
            $table->date('tgl_penawaran');
            $table->string('id_perusahaan_tujuan');
            $table->foreign('id_perusahaan_tujuan')->references('id_tujuan')->on('tujuan_penawaran');
            $table->string('lampiran');
            $table->text('deskripsi');
            $table->string('jenis_penawaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penawaran');
    }
};
