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
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->text('textFacts');
            $table->integer('Happy_Clients')->default(232);
            $table->integer('Projects')->default(521);
            $table->integer('Hours_Of_Support')->default(1453);
            $table->integer('Hard_Worker')->default(32);
            $table->text('text_skils');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facts');
    }
};
