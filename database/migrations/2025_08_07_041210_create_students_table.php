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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255);
            $table->string('nickname', 255);
            $table->string('email', 255);
            $table->string('phone_number', 15);
            $table->string('admission_path', 255);
            $table->text('image');
            $table->string('first_study_program', 255);
            $table->string('second_study_program', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
