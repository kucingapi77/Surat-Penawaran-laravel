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
        Schema::create('sow', function (Blueprint $table) {
            $table->string('id_sow')->primary();
            $table->string('id_penawaran');
            $table->foreign('id_penawaran')->references('id_penawaran')->on('tabel_penawaran');
            $table->string('nama_sow');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sow');
    }
};
