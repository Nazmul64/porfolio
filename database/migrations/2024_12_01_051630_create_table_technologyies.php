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
        Schema::create('ourtechnologies', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('maintitle')->nullable();
            $table->longText('maindescription')->nullable();
            $table->longText('photo')->nullable();
            $table->longText('maintitle2')->nullable();
            $table->longText('maindescription2')->nullable();
            $table->longText('photo_2')->nullable();
            $table->longText('maintitle3')->nullable();
            $table->longText('maindescription3')->nullable();
            $table->longText('photo_3')->nullable();
            $table->longText('maintitle4')->nullable();
            $table->longText('maindescription4')->nullable();
            $table->longText('photo_4')->nullable();
            $table->longText('maintitle5')->nullable();
            $table->longText('maindescription5')->nullable();
            $table->longText('photo_5')->nullable();
            $table->longText('maintitle6')->nullable();
            $table->longText('maindescription6')->nullable();
            $table->longText('photo_6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourtechnologies');
    }
};
