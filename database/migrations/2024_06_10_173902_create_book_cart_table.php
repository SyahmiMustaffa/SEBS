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
        Schema::create('book_cart', function (Blueprint $table) {
            $table->increments('bookCartId');
            $table->unsignedInteger('cartId');
            $table->unsignedInteger('variationId');
            $table->unsignedInteger('bookId')->nullabe();
            $table->integer('qty');
            $table->timestamps();
            // Foreign key constraint
            $table->foreign('cartId')->references('cartId')->on('cart')->onDelete('cascade');
            $table->foreign('variationId')->references('variationId')->on('variation')->onDelete('cascade');
            $table->foreign('bookId')->references('bookId')->on('book')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_cart');
    }
};
