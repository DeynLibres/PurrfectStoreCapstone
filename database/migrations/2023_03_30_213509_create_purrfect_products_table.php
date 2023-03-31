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
        Schema::create('purrfect_products', function (Blueprint $table) {
            $table->id('product_id');
            $table ->string('product_name');
            $table ->decimal('product_price', 6,2);
            $table ->string('product_type');
            $table ->string('product_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purrfect_products');
    }
};
