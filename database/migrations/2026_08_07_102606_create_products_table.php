<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('originalPrice', 10, 2)->nullable();
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('reviewsCount')->default(0);
            $table->integer('stockCount')->default(0);
            $table->boolean('inStock')->default(true);
            $table->boolean('isNew')->default(false);
            $table->boolean('isSale')->default(false);
            $table->text('image')->nullable();
            $table->json('galleryImages')->nullable();
            $table->string('sku')->nullable();
            $table->json('colors')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
