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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('kareem riade');
            $table->string('imge')->default('hero-bg.jpg')->nullable();
            $table->string('experiences')->default('Developer, Back_End, PHP_larvel_developer, FreeLancer');
            $table->string('facebook')->default('https://www.facebook.com/kareem.reade?mibextid=ZbWKwL');
            $table->string('twiter')->default('https://twitter.com/kareem1772002?t=-d0efM3dy5E_I_c9-tNpdw&s=09');
            $table->string('skype')->default('https://join.skype.com/invite/CdJUQ05Ma1dg');
            $table->string('instagram')->default('https://instagram.com/kareem_reida?utm_source=qr&igshid=ZDc4ODBmNjlmNQ%3D%3D');
            $table->string('linkedin')->default('https://www.linkedin.com/in/kareem-reade-a64920258');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
