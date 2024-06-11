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
        Schema::create('variation', function (Blueprint $table) {
            $table->increments('variationId');
            $table->unsignedInteger('equipmentId');
            $table->integer('qtyOnHand');
            $table->integer('qtyOnBook');
            $table->integer('qtyAvailable');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
            // Foreign key constraint
            $table->foreign('equipmentId')->references('equipmentId')->on('equipment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation');
    }
};
