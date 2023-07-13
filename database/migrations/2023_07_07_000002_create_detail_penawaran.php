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
        Schema::create('detail_penawaran', function (Blueprint $table) {
            $table->string('id_detail_penawaran')->primary();
            $table->string('id_penawaran');
            $table->foreign('id_penawaran')->references('id_penawaran')->on('penawaran');
            $table->text('deskripsi');
            $table->integer('jumlah');
            $table->string('jenis_pekerjaan');
            $table->Integer('biaya');
            $table->Integer('qty');
            $table->Integer('satuan');
            $table->Integer('harga_satuan');
            $table->Integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penawaran');
    }
};
