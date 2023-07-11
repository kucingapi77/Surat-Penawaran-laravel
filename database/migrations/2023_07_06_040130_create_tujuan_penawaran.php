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
        Schema::create('tujuan_penawaran', function (Blueprint $table) {
            $table->string('id_tujuan')->primary();
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_telepon');
            $table->string('pic');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tujuan_penawaran');
    }
};
