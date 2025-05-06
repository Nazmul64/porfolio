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
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('clouddatabases')->nullable();
            $table->longText('websitehosting')->nullable();
            $table->longText('filestorage')->nullable();
            $table->longText('forextrading')->nullable();
            $table->longText('filebackups')->nullable();
            $table->longText('remotedesktop')->nullable();
            $table->longText('emailservers')->nullable();
            $table->longText('hybridcloud')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostings');
    }
};
