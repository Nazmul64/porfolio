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
        Schema::create('whyspecils', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('communication_title')->nullable();
            $table->longText('communication_description')->nullable();
            $table->longText('experience_title')->nullable();
            $table->longText('experience_description')->nullable();
            $table->longText('safeSecure_title')->nullable();
            $table->longText('safeSecure_description')->nullable();
            $table->longText('passionfortesting_title')->nullable();
            $table->longText('passionfortesting_description')->nullable();
            $table->longText('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whyspecils');
    }
};
