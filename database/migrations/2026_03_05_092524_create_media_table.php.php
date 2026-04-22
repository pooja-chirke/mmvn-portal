<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This function creates the table in database
     */

    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {

            $table->id(); 
            // Primary key (auto increment)

            $table->string('title'); 
            // Title of media item

            $table->string('type'); 
            // Type of media (video, press, youtube)

            $table->string('link')->nullable(); 
            // External link like youtube video

            $table->string('image')->nullable(); 
            // Thumbnail image path

            $table->timestamps(); 
            // created_at and updated_at

        });
    }

    /**
     * Reverse the migrations.
     * This function deletes the table if rolled back
     */

    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};