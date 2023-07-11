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
        Schema::create('item_detail_sow', function (Blueprint $table) {
            $table->string('id_item_detail_sow')->primary();
            $table->string('id_detail_sow');
            $table->foreign('id_detail_sow')->references('id_detail_sow')->on('detail_sow');
            $table->string('rincian_pekerjaan');
            $table->string('tugas_penawar');
            $table->string('pic_penerima');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_detail_sow');
    }
};
