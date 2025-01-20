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
        // Create the brands table
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('lunched_at');
            $table->text('description');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });

        // Create the brand_images table to store multiple images
        // Schema::create('brand_images', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('brand_id');
        //     $table->string('image_path');
        //     $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the brand_images table first because it has a foreign key constraint
        // Schema::dropIfExists('brand_images');

        // Then drop the brands table
        Schema::dropIfExists('brands');
    }
};
