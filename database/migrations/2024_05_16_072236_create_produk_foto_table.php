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
        Schema::create('produk_foto', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('kode_produk')->references('kode_produk')->on('produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_foto');
    }
};
