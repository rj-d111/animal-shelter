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
        Schema::create('adopted_pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species'); // Can be 'dog' or 'cat'
            $table->string('breed'); // Or use an enum for common breeds
            $table->string('gender');
            $table->string('color');
            $table->integer('age'); // Consider using a more specific data type like 'year' or 'month'
            $table->text('description');
            $table->timestamp('adoption_date')->useCurrent();
            $table->string('image_path')->nullable(); // Nullable in case some pets don't have images
            $table->timestamps();
            // $table->unsignedBigInteger('adopter_id'); // Foreign key to users or adopters table

            // Indexes for performance
            // $table->index('species');
            // $table->index('adoption_date');
            // $table->foreign('adopter_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopted_pets');
    }
};
