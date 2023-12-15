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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string("nama_pemesan");
            $table->text("nama_penumpang");
            $table->string("keberangkatan");
            $table->string("tujuan");
            $table->integer("harga");
            $table->integer("jumlah_penumpang");
            $table->string("kendaraan");
            $table->date("tanggal_keberangkatan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
