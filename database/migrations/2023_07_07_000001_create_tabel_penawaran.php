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
        Schema::create('tabel_penawaran', function (Blueprint $table) {
            $table->string('id_penawaran')->primary();
            $table->date('tgl_penawaran');
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
        Schema::dropIfExists('tabel_penawaran');
    }
};
