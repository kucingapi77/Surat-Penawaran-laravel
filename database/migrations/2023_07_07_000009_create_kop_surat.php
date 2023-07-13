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
        Schema::create('kop_surat', function (Blueprint $table) {
            $table->string('id_kop_surat')->primary()->autoIncrement();
            $table->string('id_penawaran');
            $table->foreign('id_penawaran')->references('id_penawaran')->on('penawaran');
            $table->string('nomor_surat');
            $table->string('lampiran');
            $table->string('perihal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kop_surat');
    }
};
