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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->json('images')->nullable();
            $table->string('name')->unique();
            $table->string('sku')->unique();
            $table->text('information')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->json('colors')->nullable();
            $table->json('tags')->nullable();
            $table->string('status')->default('available');
            $table->timestamps();
        });

        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
