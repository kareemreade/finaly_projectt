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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('first_textAbout');
            $table->string('imge')->default('kareem');
            $table->string('workFields')->default('Web Developer.');
            $table->text('text_workFields');
            $table->string('Birthday')->default('1 May 1995');
            $table->string('Website')->default('www.example.com');
            $table->string('Phone')->default('+123 456 7890');
            $table->string('City')->default('New York, USA');
            $table->integer('Age')->default(30);
            $table->string('Degree')->default('Master');
            $table->string('PhEmailone')->default('email@example.com');
            $table->string('Freelance')->default('Available');
            $table->text('finaly_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
