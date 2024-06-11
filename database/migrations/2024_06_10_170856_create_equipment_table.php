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
        Schema::create('equipment', function (Blueprint $table) {
            $table->increments('equipmentId');
            $table->unsignedInteger('userCreate');
            $table->unsignedInteger('userModify')->nullable();
            $table->string('equipmentName');
            $table->string('equipmentDescription');
            $table->string('equipmentImg');
            $table->integer('status');
            $table->timestamps();
            // Foreign key constraint
            $table->foreign('userCreate')->references('adminId')->on('admin')->onDelete('cascade');
            $table->foreign('userModify')->references('adminId')->on('admin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
