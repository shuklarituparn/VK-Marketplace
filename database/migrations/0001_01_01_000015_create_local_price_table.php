<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('local_product_price', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->decimal('price', 8, 2);
            $table->primary(['product_id', 'city_id']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('local_product_price');
    }

};
