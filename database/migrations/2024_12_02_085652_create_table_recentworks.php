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
        Schema::create('recentworks', function (Blueprint $table) {
            $table->id();
            $table->longText('projecttitle');
            $table->longText('projectdescription');
            $table->string('detailstitle');
            $table->longText('detailsdescription'); 
            $table->string('clientname');
            $table->string('category');
            $table->string('date');
            $table->string('livepreview'); 
            $table->string('photo');
            $table->string('detailsphoto');
            $table->string('detailsphoto1');
            $table->string('detailsphoto2');
            $table->string('detailsphoto3');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recentworks');
    }
};
