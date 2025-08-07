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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->notNullable();
            $table->string('instagram_link')->notNullable();
            $table->string('youtube_link')->notNullable();
            $table->string('linkedin_link')->notNullable();
            $table->string('facebook_link')->notNullable();
            $table->string('address')->notNullable();
            $table->string('email')->notNullable();
            $table->string('whatsapp_number')->notNullable();
            $table->string('google_maps_link')->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
