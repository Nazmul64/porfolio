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
        Schema::create('aboutmes', function (Blueprint $table) {
            $table->id();
            $table->text('about_title');
            $table->text('about_description');
            $table->text('name');
            $table->text('date_of_brith');
            $table->text('address');
            $table->text('zip');
            $table->text('email');
            $table->text('phone');
            $table->text('project_text');
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutmes');
    }
};
