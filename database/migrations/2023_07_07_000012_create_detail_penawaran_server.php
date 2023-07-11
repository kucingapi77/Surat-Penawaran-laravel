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
        Schema::create('detail_penawaran_server', function (Blueprint $table) {
            $table->string('id_detail_penawaran_server')->primary();
            $table->string('id_penawaran_server');
            $table->foreign('id_penawaran_server')->references('id_penawaran_server')->on('penawaran_server');
            $table->string('deskripsi');
            $table->integer('qty');
            $table->string('satuan');
            $table->Integer('harga_satuan');
            $table->Integer('total/bulan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penawaran_server');
    }
};
