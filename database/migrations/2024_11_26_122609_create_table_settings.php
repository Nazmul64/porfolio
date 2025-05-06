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
        Schema::create('sittings', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->longText('address');
            $table->longText('gmail');
            $table->longText('phone');
            $table->longText('facebook');
            $table->longText('youtube');
            $table->longText('whatsapp');
            $table->longText('instragram');
            $table->longText('linkdine');
            $table->string('photo');
            $table->string('icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sittings');
    }
};
