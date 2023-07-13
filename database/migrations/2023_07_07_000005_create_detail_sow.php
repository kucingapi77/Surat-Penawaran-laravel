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
        Schema::create('detail_sow', function (Blueprint $table) {
            $table->string('id_detail_sow')->primary();
            $table->string('id_sow');
            $table->foreign('id_sow')->references('id_sow')->on('sow');
            $table->string('rincian_pekerjaan');
            $table->string('nama_perusahaan');
            $table->string('pic_penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sow');
    }
};
