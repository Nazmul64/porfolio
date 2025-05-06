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
        Schema::create('omsblogs', function (Blueprint $table) {
            $table->id(); 
            $table->string('title', 255); // Limit string length for optimization
            $table->longText('description'); 
            $table->string('details_title', 255)->nullable(); // Make it nullable
            $table->longText('details_description')->nullable(); 
            $table->string('main_photo'); 
            $table->string('details_photo')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omsblogs');
    }
};
