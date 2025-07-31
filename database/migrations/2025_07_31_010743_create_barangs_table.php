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
        Schema::create('barangs', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_barang')->primary();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('unit_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('price', 15, 2);
            $table->integer('stock');
            $table->float('weight');
            $table->string('url_picture');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
