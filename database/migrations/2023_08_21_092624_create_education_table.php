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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->default('MASTER OF FINE ARTS & GRAPHIC DESIGN......');
            $table->string('start_date')->default('2018');
            $table->string('end_date')->default('2020');
            $table->string('University_Name')->default('Rochester Institute of Technology, Rochester, NY');
            $table->text('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
