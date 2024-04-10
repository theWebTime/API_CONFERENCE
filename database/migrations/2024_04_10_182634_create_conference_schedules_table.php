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
        Schema::create('conference_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conferences_id');
            $table->foreign('conferences_id')->references('id')->on('conferences');
            $table->string('date', 30);
            $table->text('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_schedules');
    }
};
