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
        Schema::create('book', function (Blueprint $table) {
            $table->increments('bookId');
            $table->unsignedInteger('studentId');
            $table->unsignedInteger('cartId');
            $table->timestamps();
            $table->date('startDate');
            $table->date('endDate');
            $table->string('purpose');
            $table->integer('status');
            $table->string('remark')->nullable();
            // Foreign key constraint
            $table->foreign('studentId')->references('studentId')->on('student')->onDelete('cascade');
            $table->foreign('cartId')->references('cartId')->on('cart')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
