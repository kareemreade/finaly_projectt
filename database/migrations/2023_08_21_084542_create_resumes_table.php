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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->text('text_Resume');
            $table->string('name')->default('kareem');
            $table->text('text_Summary');
            $table->string('address')->default('Palestine Gaza 127 Khan Yunis Khuza،a');
            $table->string('phone')->default('0595522218');
            $table->string('email')->default('kareem1772002@gmail.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
